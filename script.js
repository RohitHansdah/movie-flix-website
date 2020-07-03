let flag1=false;
$('#create').click (()=>{
    if(flag1==false)
    {
      $('#create-form').show(2000);
      flag1=true;
    }
    else
    {
      $('#create-form').hide(2000);
      flag1=false;
    }
});
let flag2=false;
$('#edit').click (()=>{
    if(flag2==false)
    {
      $('#update-form').show(2000);
      flag2=true;
    }
    else
    {
      $('#update-form').hide(2000);
      flag2=false;
    }
});
let flag3=false;
$('#delete').click (()=>{
    if(flag3==false)
    {
      $('#delete-form').show(2000);
      flag3=true;
    }
    else
    {
      $('#delete-form').hide(2000);
      flag3=false;
    }
});
