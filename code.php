<script>
  $(document).ready(function(){ 
      $("#basic-select").change(function(){
        var main_cat = $(this).val();
        var _token = $('#_token').val();
        $.ajax({
            type:'POST',
            url:"load_subcat",
            data:{
              main_cat: main_cat,
              _token: "{{ csrf_token() }}"
            },
            dataType: 'json',
            success: function( data ) {

            $('#mySelect').empty();

            $.each(data, function(key, value) {  
              $('#mySelect')
                .append($("<option></option>")
                .attr("value",data[key].id)
                .text(data[key].sub_cat_name)); 
              });
            }
        });
      })
  });  
</script>