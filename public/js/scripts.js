(function(window, undefined) {
  'use strict';

  /*
  NOTE:
  ------
  PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
  WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */
$("#thumb").change(function(){
        console.log("working")
        $("#previewImg").attr("src", "");
        let id = "#previewImg";
        var file = $("#thumb").get(0).files[0];
        showImage(file, id);
});

$("#other_img").change(function(){
        console.log("working")
        $("#previewImg2").attr("src", "");
        let id = "#previewImg2";
        var file = $("#other_img").get(0).files[0];
        showImage(file, id);
});

function showImage(file, id){
    if(file){
        let reader = new FileReader();

        reader.onload = function(e){
            var img = new Image();      
                img.src = e.target.result;
                
                img.onload = function () {
                    var w = this.width;
                    var h = this.height;
                    
                    // if (h < 300 || w < 300) {
                    //     console.log("Fail");
                    //     $("#thumb").val('');
                        
                    //     swal({
                    //         title: "Fail",
                    //         text: "The Image Dimention Should be 512X512",
                    //         icon: "error",
                    //     });
                    //     return;
                    // }
                    console.log(w+"----"+h);
                    $(id).attr("src", reader.result);
                    
                }
                
            
        }

        reader.readAsDataURL(file);
    }
}


})(window);