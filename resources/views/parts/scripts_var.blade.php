<script>
  $lang = "<?php echo Config::get('app.locale'); ?>",
    {{--//   $gtm = "{{setting('site.gtm')}}",--}}
      $csrfToken = '{{ csrf_token() }}',
      $langs = {
{{--        'errorRecaptcha': '@lang("lang.error_recaptcha")',--}}
      };
</script>


