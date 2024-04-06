
// 1- get button

var loadcontent  = document.getElementById("chng_btn")

//2- get div 

var divcontent = document.getElementById("maincontent")


console.log(loadcontent, divcontent)

// use jquery libaray to implement ajax call ?? 

loadcontent.addEventListener('click',function(){

    $.ajax({

        method:"post",

        url: "http://127.0.0.1/assuitdemo/myfile.php?id=10",

        data: { // send data in body if method post ... if method --> get- --> query string
            name: "noha"  ,
            email: "noha@gmail.com"
        },
        success:function(res){
            console.log("=---> request successed",res)
            divcontent.innerHTML += res
        },
        error: function(){
            console.log("---- Error =====")
        }
    
    })
} )
