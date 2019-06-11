<div class="row">
  <div class="col-md-6">
    <form id="fdata">
          <div class="form-group">
            <label for="exampleInputEmail1">ID</label>
            <input type="text" class="form-control id_video" name="id_video" id="id_video" placeholder="ID">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input type="text" class="form-control judul" name="judul" id="judul" placeholder="Judul">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kategori</label>
            <input type="text" class="form-control kategori" name="kategori" id="kategori" placeholder="Judul">
          </div>
        <button type="button" class="btn btn-primary simpan_post">Simpan</button>
          </form>
  </div>
  <div class="col-md-6">
    <table class="table">
      <thead>
        <tr>
          <!-- <td>No.</td> -->
          <td>ID_VIDEO</td>
          <td>Judul</td>
          <td>Kategori</td>
          <td>Tanggal</td>
          <td></td>
        <tr>
      </thead>
      <tbody id="zona_data">
      </tbody>
    </table>
  </div>
</div>


<script>
  $(".simpan_post").on('click', function(e) {
    console.log("Simpan")
    $(this).attr('disabled','disabled');
    $(this).html("Menyimpan...")
    $("body").css("cursor", "progress");
    var judul = "judul="+$('.judul').val();
    var kategori = "kategori="+$('.kategori').val();
    var id_video = "id_video="+$('.id_video').val();
    var fdata = ""+judul+"&"+kategori+"&"+id_video+"";
    console.log(fdata)
    $.ajax({
        type : 'POST',
        url:'modules/simpan_post.php',
        data : fdata,

        success:function(response)
        {
           if(response == "gagal")
           {
              alert("Gagal");
           }
           else{
             console.log('sukses')
            $('button.simpan_post').removeAttr('disabled','disabled');
            $('button.simpan_post').html("Simpan")
            $("body").css("cursor", "default");

            post_list()
            $("div.tambah_post").slideToggle("slow");
          }
        },
        error:function()
        {
          alert("Sistem Bermasalah");
        }
      });
  })



      function post_list()
    {
        $.ajax({
          type : 'POST',
          url:'modules/post_list.php',
          success:function(response)
          {
             if(response == "no_data"){
               $("tbody#zona_data").empty();
              $("tbody#zona_data").append("<tr><td colspan='7'><div class='callout callout-danger'>Belum ada data.</div></td></tr>");
             }
             else{
              $("tbody#zona_data").empty();
              $("tbody#zona_data").append(""+response+"");
            }
          },
          error:function()
          {
            alert("Sistem Bermasalah");
          }
        });
      }
      $(function(){ post_list(); });

    //   function post_detail(id_post)
    // {
    //   var id = "ID="+id_post;
    //   console.log(id_post)
    //     $.ajax({
    //       type : 'POST',
    //       url:'modules/post_detail.php',
    //       data : id,
    //       success:function(response)
    //       {
    //          if(response == "no_data"){
    //          }
    //          else{
    //            console.log('ok');
    //            $(".modal_detail_post").modal("show");
    //           $("div.div_detail_post").html(""+response+"");
    //         }
    //       },
    //       error:function()
    //       {
    //         alert("Sistem Bermasalah");
    //       }
    //     });
    //   }

</script>
