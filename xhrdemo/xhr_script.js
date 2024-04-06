/***
 * to implement pulling in web application 
 * xml http request 
 *  
 * 
 */
// 1- object from xmlHTTP request 
console.log("welcome to xhr pulling data ")

var xhr = new XMLHttpRequest()  // create object from xmlhttp request 

console.log(xhr)
// ajax 

// axios  ==

// get button 
chng_content = document.getElementById("chng_btn");
// console.log(chng_content);

main_content = document.getElementById("maincontent");
// console.log(main_content);

chng_content.addEventListener("click",function(){
    console.log("button clicked ")


    // load data from names.txt  ==> sending request to the file

    //1- open connection between app and the server  
    console.log("ready state", xhr.readyState) // before opening 
    xhr.open("GET", "names.txt")
    // 2- send the request 
    xhr.send()
    console.log(xhr)
    // send data with the request
    // xhr.send("Hello world") 

    // get response and  and display data in main content div

    // changing the state ==> once you notice a change in the xhr object 
    // --> do the following
    console.log("ready state",xhr.readyState)  // after opening request --> ready state 1 

    xhr.onreadystatechange= function(){

        console.log("ready state changed", this.readyState)

        // console.log('data received')
        if (xhr.readyState===4 && xhr.status===200){
            console.log(xhr.responseText)
            main_content.innerHTML += xhr.responseText
    
        }else if(xhr.readyState===4 && xhr.status===404){
            main_content.innerHTML +="<h1 class='text-dark'>Data not found </h1>"
        }



    }
    

    // console.log(xhr.responseText)


    
})

// push and pull 