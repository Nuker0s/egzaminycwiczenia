let like = false


function polub()
{
    let serce = document.getElementById("serce")
    if (like) {
        
        serce.src = "icon-off.png"
        like=false
    }
    else
    {
        serce.src = "icon-on.png"
        like=true
    }
    

}
function zmienzdjecie(ctx)
{
    console.log(ctx);
    let mainph = document.getElementById("mainph");
    mainph.src=ctx;
}