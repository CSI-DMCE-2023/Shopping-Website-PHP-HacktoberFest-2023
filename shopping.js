const data = [
    {
        name: 'Rohan Das',
        age: 18,
        city: 'Kolkata',
        image: 'https://randomuser.me/api/portraits/men/51.jpg',
        reviews:'best website'
        
    },

    {
        name: 'Shubham Sharma',
        age: 28,
        city: 'Bangalore',
        image: 'https://randomuser.me/api/portraits/men/54.jpg',
        reviews:'satisfied'

    },

    {
        name: 'Camella Cabello',
        age: 18,
        city: 'Kolkata',
        image: 'https://randomuser.me/api/portraits/women/55.jpg',
        reviews:'lovely'

    },

    {
        name: 'Aishwariya Rai',
        age: 45,
        city: 'Mumbai',  
      image: 'https://randomuser.me/api/portraits/women/57.jpg',
      reviews:'good job'

    },

    {
        name: 'Rohit Sharma',
        age: 34,
        city: 'Jharkhand',
        image: 'https://randomuser.me/api/portraits/men/61.jpg',
        reviews:'kya baat hai'

    }
]
let username=document.getElementById("name");
username.addEventListener("blur",()=>{
    let regexname=/[A-Z][a-z].+[0-9]{3}/
    if (regexname.test(username.value)) {
        document.getElementById("nameFeedback").style="display:block;color: rgb(17, 179, 17);";
        document.getElementById("innameFeedback").style="display:none";
    }
    else{
        // console.log("a name must carry capital alphabet small alphabet and min 3 any number!!!");
        document.getElementById("innameFeedback").style="display:block;color: red";
        document.getElementById("nameFeedback").style="display:none";
    }

})
let email=document.getElementById("email");
email.addEventListener("blur",()=>{
    let regexemail=/^[cm]{2}.+\.com$/;
    if (regexemail.test(email.value)) {
        document.getElementById("emailFeedback").style="display:block;color: rgb(17, 179, 17);";
        document.getElementById("inemailFeedback").style="display:none";
    
    }
    else{
        document.getElementById("inemailFeedback").style="display:block;color: red";
        document.getElementById("emailFeedback").style="display:none";
    }

})
let pass=document.getElementById("password");
pass.addEventListener("blur",()=>{
    let regexpass=/[a-zA-Z0-9]{8}/
    if (regexpass.test(pass.value)) {
        document.getElementById("passwordFeedback").style="display:block;color: rgb(17, 179, 17);";
        document.getElementById("inpasswordFeedback").style="display:none";
    }
    else{
        // console.log("a name must carry capital alphabet small alphabet and min 3 any number!!!");
        document.getElementById("inpasswordFeedback").style="display:block;color: red";
        document.getElementById("passwordFeedback").style="display:none";
    }

})

let login=document.getElementById("login");
login.addEventListener("click",()=>{
    let username=document.getElementById("username");
    let userpass=document.getElementById("userpass");
    let regexname=/[A-Z][a-z].+[0-9]{3}/
    let regexpass=/[a-zA-Z0-9]{8}/
    if (regexname.test(username.value)) {
        document.getElementById("vausername").style="display:block;color: rgb(17, 179, 17);";
        document.getElementById("inusername").style="display:none";
    }
    else{
        // console.log("a name must carry capital alphabet small alphabet and min 3 any number!!!");
        document.getElementById("inusername").style="display:block;color: red";
        document.getElementById("vausername").style="display:none";
    }
    if (regexpass.test(userpass.value)) {
        document.getElementById("vapass").style="display:block;color: rgb(17, 179, 17);";
        document.getElementById("inpass").style="display:none";
    }
    else{
        // console.log("a name must carry capital alphabet small alphabet and min 3 any number!!!");
        document.getElementById("inpass").style="display:block;color: red";
        document.getElementById("vapass").style="display:none";
    }
})
function iterator(obj) {
    index=0;
    return {
        next:()=> {
        if (index<obj.length) {
            return {value:obj[index++],data:false}
        }
        else{
           if (index==5) {
               index=0;
               return {value:obj[index++],data:false}
           }
        }
    }
}}
const nextvalue=iterator(data);
function show() {
    const currentscene=nextvalue.next().value;
    document.getElementById("insidecard").innerHTML=`
<div class="boxelement">
<img src="${currentscene.image}" style="width: 100px;
height: 94px;
margin: 20px;
border-radius: 70px;">
<div class="innerbox">
<label for="name">Name:${currentscene.name}</label>
<label for="age">Age:${currentscene.age}</label>
<label for="city">City:${currentscene.city}</label>
</div>
</div>
<label for="city" id="city">Reviews:${currentscene.reviews}</label>
<button type="button" class="btn btn-default bg-success btn-sm" style="width: 120px;
margin: auto;
border-radius: 25px;" id="nextimage">
          <span class="glyphicon glyphicon-chevron-right"></span> More
        </button>
`
}
show();
document.getElementById("nextimage").addEventListener("click",()=>{
    if (nextvalue.next().value!=undefined) {
    show();
    }
    else{
        alert("over");
    }
});
document.getElementById("logout").addEventListener("click",()=>{
    console.log("ayush shukla");
})