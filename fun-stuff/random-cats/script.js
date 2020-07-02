// Call getRandomCatPicture when page loads
$(document).ready(function(){
    getRandomCatPicture();
});

function getRandomCatPicture() {
    $('#newCatButton').addClass('is-loading');

    $.ajax({
        url:"https://aws.random.cat/meow", //the page containing php script
        type: "post", //request type,
        dataType: 'json',
        success: function(result){
            $('#catPicture').attr('src', result.file);
            $('#newCatButton').removeClass('is-loading');
        }
    });
}