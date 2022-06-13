window.onload = function(){
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}}

function fetch_info(){
    let profile=["image/doctor.jpg","image/doctor2.jpg","image/doctor4.jpg","image/doctor3.jpg","image/doctor.jpg"];
    let namee=["Alexander coleman", "abebe","melat","helina","john"];
    let statuss=["senior surgeon","gynecologist", "brain surgeon","dentist", "pediatrician"];
     document.getElementById("profilee").src=profile[i];
     document.getElementById("namee").innerHTML=namee[i];
     document.getElementById("statuss").innerHTML=statuss[i];
     document.getElementById("docaboutt").innerHTML=namee[i] + " Lorem ipsum dolor" + "sit amet consectetur adipisicing elit. Cumque deleniti repudiandae at assumenda" + "in distinctio repellendus neque dolor alias, eius veniam quis consequatur quam velit" + "harum qui quas ratione ullam quae laborum vero dicta? Nobis harum nemo similique maxime! Ad" +  "deserunt delectus Sed aut facilis illum dolores fugiat Totam soluta dolores deserunt commodi Amet laudantium" + "ipsam numquam dolorem corrupti eius consequuntur voluptatibus possimus nam odio atque deleniti minima animi" + "reprehenderit eaque voluptas quidem perferendis? Esse harum repellat ex animi iste!";

}
