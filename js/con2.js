//Connection between tables and sidebar
$(".get_form").click(function(event){
    event.preventDefault();
    var url=$(this).attr("href");
    $.post(url,function(rest){
        $(".place_form").html(rest);
    })
  })
  function reset(){
    txt = document.getElementsByClassName("txt");
          for (i = 1; i < array.length; i++) {
            txt[i].value ="";

  }
}
  function resetForm() {
    $("#form").trigger("reset"); // Reset all form fields
    // $("#form").find("input, select").val(""); // Explicitly clear form values
    $("#b1").show(); // Show 'Save' button by default
    // $("#b2").hide(); // Hide 'Update' button by default
  }
  
  // for insertin button
  var mess=$("#messege");
  p1=$("#p1");
  $("#form").submit(function(){
      sendData($("#form").serialize()+"&oper=insert&");
      $("#modaldata").modal("hide");
      mess.modal("show");
      resetForm();
      return false;
  })
  //response from database
  $("#sve").click(()=>{
    resetForm();
      mess.modal("hide");
  
  })
  $("#addb").click(()=>{
    resetForm();;
      $("#b2").hide();
      reset();
  })
  // All operations like insert update and delete
  sendData=(xog)=>{
      $.ajax({
          url:"../php/database.php",
          data:xog,
          success:(res)=>{
            p1.html(res);
               aqri($("#t").val())
              }
      })
  }
   //For table reading.
  aqri=(mytable)=>$("#rep").load("../php/tables.php?table="+mytable)
  aqri($("#t").val())
  
  
  var tt=$(".tt").val();
  var b1=$(".b1");
  $("body").on("click", ".update", function () {
      $("#modaldata").modal("show");
          var id = $(this).val();
          b1.hide();
      var sql = "SELECT * FROM " + tt + " where id=" + id;
      $.ajax({
        url: "../php/search.php",
        data: "qry=" + sql,
        success: (res) => {
          array = res.split(",");
          txt = document.getElementsByClassName("txt");
          txt[0].value = id;
          for (i = 1; i < array.length; i++) {
            txt[i].value = array[i];
          }
        },
      });
    });
  
  
  
  //For update button
  $("#b2").click(()=>{
      sendData($("#form").serialize()+"&oper=update&");
      $("#modaldata").modal("hide");
      mess.modal("show");
      resetForm();
  
  })
  
  
  //For Delete button
  $("body").delegate(".delete","click",function(){
    var id=$(this).val();
      var sql="SELECT * FROM "+tt+" WHERE id="+id;
    $.ajax({
      url:"../php/search.php",
      data:"qry="+sql,
      success:(res)=>{
        array=res.split(",");
        txt=document.getElementsByClassName("txt");
        txt[0].value=id;
           $("#deleted").modal("show");
      }
    })
    
  })
  
  $("body").off("click", "#bdel").on("click", "#bdel", function() {
      sendData($("#form").serialize()+"&oper=delete&");
      $("#deleted").modal("hide");
       mess.modal("show");
  
  
  
  });
  $("body").on("click", "#no", function() {
     $("#deleted").modal("hide");
  });
  
  courses=$(".cor");
  $("#log").click(()=>{
    $.ajax({
      url:"../index/logop.php",
      data:$("#fm").serialize(),
      success:(res)=>{
        if(res.trim()==="yes"){
          window.location.href="../index/index.php";
          courses.hide();
        }else{
          $("#res").html(res);
        }
      }
    })
  return false;
  })
  
  
  $(document).ready(() => {
      $("#search").on("keyup", () => {
        let query = $("#search").val().trim(); 
        let table = $("#table").val().trim(); 
        let column = $("#column").val().trim(); 
    
        if (query === "" || table === "" || column === "") {
            aqri($("#t").val());
          return;
        }
    
        // Perform AJAX request
        $.ajax({
          url: "../php/searchview.php",
          data: { search: query, table: table, column: column },
          success: (res) => {
            $("#rep").html(res);
          },
          error: (err) => {
            console.error("Error fetching data:", err);
            $("#rep").html("");
          },
        });
      });
    });
  
  