@extends("front.$version.layout")

@section('content')
  <h1>Please do not refresh this page...</h1>
  <form
    method="post"
    action="{{ $paytm_txn_url }}"
    name="f1"
  >
    {{ csrf_field() }}
    <table>
      <tbody>
        <?php
          foreach($paramList as $name => $value) {
            echo '<input type="hidden" name="' . $name . '" value="' . $value . '">';
          }
        ?>
        
        <input
          type="hidden"
          name="CHECKSUMHASH"
          value="<?php echo $checkSum ?>"
        >
      </tbody>
    </table>
  </form>
@endsection

@section('scripts')
  <script type="text/javascript">
    document.f1.submit();
  </script>
@endsection
