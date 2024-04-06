
// 1- get button

var loadcontent  = document.getElementById("chng_btn")

//2- get div 

var divcontent = document.getElementById("maincontent")


console.log(loadcontent, divcontent)

// use jquery libaray to implement ajax call ?? 

loadcontent.addEventListener('click',function(){

    $.ajax({

        method:"get",

        url: "courses.txt",

        data: { // send data in query string 
            name: "noha"  
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
