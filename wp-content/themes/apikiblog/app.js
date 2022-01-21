/*
let requestPosts = new XMLHttpRequest();
requestPosts.open('GET', 'https://blog.apiki.com/wp-json/wp/v2/posts?_embed&categories=518');
requestPosts.onload = () => {
  if (requestPosts.status >= 200 && requestPosts.status < 400) {
    let data = JSON.parse(requestPosts.responseText);
  } else {
    console.log("We connected to the server, but it returned an error.");
  }
};

requestPosts.onerror = () => {
  console.log("Connection error");
};

requestPosts.send();
*/