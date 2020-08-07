// Call getRandomCatPicture when page loads
$(document).ready(function(){
    getRandomCatPicture();
});

function getRandomCatPicture() {
    $('#newCatButton').addClass('is-loading');

    $.ajax({
        url:"https://api.thecatapi.com/v1/images/search", //the page containing php script
        type: "get", //request type,
        dataType: 'json',
        success: function(result){
            $('#catPicture').attr('src', result[0].url);
        }
    });
}

function removeIsLoading(){
    $('#newCatButton').removeClass('is-loading');

    // To remove the unfixable warning message having to do with cross site cookies
    console.clear();
}