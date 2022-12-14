function parse()
{
	if (text.indexOf('](') !== -1)
	{
		parseInlineLinks();
	}
	if (text.indexOf('<') !== -1)
	{
		parseAutomaticLinks();
	}
	if (hasReferences)
	{
		parseReferenceLinks();
	}
}

/**
* Add an image tag for given text span
*
* @param {number} startPos Start tag position
* @param {number} endPos   End tag position
* @param {number} endLen   End tag length
* @param {string} linkInfo URL optionally followed by space and a title
*/
function addLinkTag(startPos, endPos, endLen, linkInfo)
{
	// Give the link a slightly worse priority if this is a implicit reference and a slightly
	// better priority if it's an explicit reference or an inline link or to give it precedence
	// over possible BBCodes such as [b](https://en.wikipedia.org/wiki/B)
	let priority = (endLen === 1) ? 1 : -1;

	let tag = addTagPair('URL', startPos, 1, endPos, endLen, priority);
	setLinkAttributes(tag, linkInfo, 'url');

	// Overwrite the markup without touching the link's text
	overwrite(startPos, 1);
	overwrite(endPos,   endLen);
}

/**
* Capture and return labels used in current text
*
* @return {!Object} Labels' text position as keys, lowercased text content as values
*/
function getLabels()
{
	let labels = {}, m, regexp = /\[((?:[^\x17[\]]|\[[^\x17[\]]*\])*)\]/g;
	while (m = regexp.exec(text))
	{
		labels[m.index] = m[1].toLowerCase();
	}

	return labels;
}

/**
* Parse automatic links markup
*/
function parseAutomaticLinks()
{
	let m, regexp = /<[-+.\w]+([:@])[^\x17\s>]+?(?:>|\x1B7)/g;
	while (m = regexp.exec(text))
	{
		// Re-escape escape sequences in automatic links
		let content  = decode(m[0].replace(/\x1B/g, "\\\x1B")).replace(/^<(.+)>$/, '$1'),
			startPos = m.index,
			endPos   = startPos + m[0].length - 1,

			tagName  = (m[1] === ':') ? 'URL' : 'EMAIL',
			attrName = tagName.toLowerCase();

		addTagPair(tagName, startPos, 1, endPos, 1).setAttribute(attrName, content);
	}
}

/**
* Parse inline links markup
*/
function parseInlineLinks()
{
	let m, regexp = /\[(?:[^\x17[\]]|\[[^\x17[\]]*\])*\]\(( *(?:\([^\x17\s()]*\)|[^\x17\s)])*(?=[ )]) *(?:"[^\x17]*?"|'[^\x17]*?'|\([^\x17)]*\))? *)\)/g;
	while (m = regexp.exec(text))
	{
		let linkInfo = m[1],
			startPos = m.index,
			endLen   = 3 + linkInfo.length,
			endPos   = startPos + m[0].length - endLen;

		addLinkTag(startPos, endPos, endLen, linkInfo);
	}
}

/**
* Parse reference links markup
*/
function parseReferenceLinks()
{
	let labels = getLabels(), startPos;
	for (startPos in labels)
	{
		let id       = labels[startPos],
			labelPos = +startPos + 2 + id.length,
			endPos   = labelPos - 1,
			endLen   = 1;

		if (text[labelPos] === ' ')
		{
			++labelPos;
		}
		if (labels[labelPos] > '' && linkReferences[labels[labelPos]])
		{
			id     = labels[labelPos];
			endLen = labelPos + 2 + id.length - endPos;
		}
		if (linkReferences[id])
		{
			addLinkTag(+startPos, endPos, endLen, linkReferences[id]);
		}
	}
}
