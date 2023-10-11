
fetch('https://fakestoreapi.com/products')
  .then((Response) => {
    return Response.json();
  }).then((data) => {
    console.log(data)
    let str = '';
    let addthis = document.getElementById("cont");
    data.forEach((element, index) => {
      str += `
                    <div class="card col-3" style="width: 20rem;
                    margin: 35px;
                    border-radius: 30px;position:relative;">
  <img class="card-img-top" src="${element['image']}" alt="Card image cap" style="width: 250px;
  height: 300px">
  <div class="card-body" >
    <h5 class="card-title">${element['title']}</h5>
    <p class="card-text" style="font-size: 25px;">Price:${element['price']}</p>
    <p>Ratings:${element['rating']['rate']}</p>
    </div></div>
    <div class="col-2 d-grid " style="height:200px">
    <a href="" class=" p-2 text-center" id="practice">Buy</a>
    <a class=" p-2 text-center addcart" id="practice" onclick="funct(${index})">Cart</a>
    <a href="" class=" p-2 text-center" id="practice" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample${index}" aria-expanded="false" aria-controls="collapseWidthExample" >Info</a>
    <div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample${index}">
    <div class="card card-body" style="width: 250px;">
      ${element['description']}
    </div>
  </div>
    </div>
    
</div>
`
      addthis.innerHTML = str;
    });
  
  })
  let ayushincrease = 0;
function funct( index) {
  ayushincrease += 1;
  document.getElementById("numorder").innerText = ayushincrease;
  addcartele(index)
}
function addcartele(index) {
  console.log(index)
  // data.forEach
  //   document.getElementById("cartelement")=str;
}
