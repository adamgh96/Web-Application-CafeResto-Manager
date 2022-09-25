var myImage = document.getElementById("mainImage");

var imageArray = ["imgcafe/cafe1.jpg","imgcafe/0.jpg","imgcafe/00.jpeg"];

var imageIndex = 0;

function changeImage() {
  myImage.setAttribute("url",imageArray[imageIndex]);
  imageIndex++;
  if (imageIndex >= imageArray.length) {
    imageIndex = 0;
  }
}

setInterval(changeImage,500);