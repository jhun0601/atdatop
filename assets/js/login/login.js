<script type="text/javascript"> 
  $(document).ready(function(){
    var dataString = $("#FormId").serialize();
    var url="ControllerName/MethodName"
        $.ajax({
        type:"POST",
        url:"<?php echo base_url() ?>"+url,
        data:dataString,
        success:function (data) {
            swal(data);
        }
        });     
  });
</script>