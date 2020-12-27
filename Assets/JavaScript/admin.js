
function admin_request()
{
  var name=prompt("Enter the name :");
  var mobile_no=prompt("Enter the mobile no:");
  var Email=prompt("Enter the Email:");
  alert("Thank you ! we'll inform you.");
  window.localStorage.setItem("name",name);
 window.localStorage.setItem("myInfo",true);
}