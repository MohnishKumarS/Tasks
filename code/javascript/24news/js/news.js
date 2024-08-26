//  API key
const API_key = "c6e071efc01545698f31c391968d8477";

// Array
var newsData = [];

// variables
const newsSection = document.querySelector("#newsSection .row");
const sportBtn = document.querySelector(".sports");
const techBtn = document.querySelector(".tech");
const entertainmentBtn = document.querySelector(".entertainment");
const businessBtn = document.querySelector(".business");
const generalBtn = document.querySelector(".general");
const scienceBtn = document.querySelector(".science");
const healthBtn = document.querySelector(".health");
const usaBtn = document.querySelector(".us-news");
const searchBtn = document.querySelector(".btn-search");
const searchField = document.querySelector(".input-search");
const chinaBtn = document.querySelector(".china-news");
const eLink = document.querySelectorAll(".nav-url");

async function fetchRandomNews() {
  try {
    const API_URL = `https://newsapi.org/v2/top-headlines?country=in&pageSize=40&apiKey=${API_key}`;
    const response = await fetch(API_URL);
    // console.log(response);
    if (!response.ok) {
      throw new Error("Failed something went wrong");
    }
    const data = await response.json();
    return data.articles;
  } catch (error) {
    console.error("Failed to fetch random news", error);
    return [];
  }
}

// ----- latest news -----

function displayLatestArticle(article) {
  if (article.length > 0) {
    //  TOP SECTION HEAD 
    let topHead1 = $('.topNews .topHead1');
    let topNews1 = $(topHead1);
    let topHead2 = $('.topNews .topHead2 .row');
    let topNews2 = $(topHead2);

    let html = '';
    article.forEach((val, index) => {
      const dateString = article[index].publishedAt;
      const date = new Date(dateString);
      const options = {
        year: 'numeric',
        month: 'short',
        day: '2-digit'
      };
      const formattedDate = new Intl.DateTimeFormat('en-US', options).format(date);

      if(index === 0){
        topNews1.find('img').attr('src', article[index].urlToImage);
        topNews1.find('.fh5co_good_font').text(article[index].title);
        topNews1.find('.fh5co_good_font').attr('href', article[index].url);
      }

      if (index >= 1 && index <= 4) {
        html += ` <div class="col-md-6 col-6 paddding " data-animate-effect="fadeIn">
        <div class="fh5co_suceefh5co_height_2"><img src="${article[index].urlToImage}" alt="img"/>
            <div class="fh5co_suceefh5co_height_position_absolute"></div>
            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                <div class=""><a  class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;${formattedDate}</a></div>
                <div class=""><a href="${article[index].url}" class="fh5co_good_font_2"  target="_blank">${article[index].title.slice(0,60) + '....'} </a></div>
            </div>
        </div>
    </div>`;
      }

    });
    topNews2.html(html);

    //  LATEST NEWS 
    var owl = $("#slider1");

    owl
      .find(".owl-stage")
      .children(".owl-item")
      .each(function (index, item) {
        var $item = $(item);
        const truncateTitle =
          article[index+5].title.length > 30 ?
          article[index+5].title.slice(0, 30) + "..." :
          article[index+5].title;

          if(article[index+5].urlToImage != null){
            $item.find("img").attr("src", article[index+5].urlToImage);
          }else{
            $item.find("img").attr("src", "no-image.jpg");
          }
        // $item.find("img").attr("src", article[index+5].urlToImage);
        $item.find("a").attr("href", article[index+5].url);
        $item.find("a").attr("target", "_blank");
        $item.find("a").text(truncateTitle);
      });

    var owl = $("#slider2");

    owl
      .find(".owl-stage")
      .children(".owl-item")
      .each(function (index, item) {
        // console.log(article[index+12]);
        var $item = $(item);
        const truncateTitle =
          article[index+12].title.length > 70 ?
          article[index+12].title.slice(0, 70) + "..." :
          article[index+12].title;
          if(article[index+12].urlToImage != null){
            $item.find("img").attr("src", article[index+12].urlToImage);
          }else{
            $item.find("img").attr("src", "no-image.jpg");
          }
        // $item.find("img").attr("src", article[index+12].urlToImage);
        $item.find("a").attr("href", article[index+12].url);
        $item.find("a").attr("target", "_blank");
        $item.find("a").text(truncateTitle);
      });
  }
}

// --------- Method 1 ---- 

(async () => {
  try {
    const article = await fetchRandomNews();

    displayLatestArticle(article);
  } catch (error) {
    console.error("Failed to fetch random news", error);
  }
})();


// --------- Method 2 ----
const fetchNews = async function (url) {
  const response = await fetch(url);
  if (response.status >= 200 && response.status < 300) {
    const data = await response.json();
    newsData = data.articles;
  } else {
    console.error("Failed to fetch all news");
  }
  $('.preview-loading-news').css('display','block');
  setTimeout(() => {
    $('.preview-loading-news').css('display','none');
    
  displayNews();
  },800)

};

function displayNews() {
  console.log(newsData);
  if (newsData.length > 0) {
    var html = "";

    newsData.forEach((data) => {
      if (data.urlToImage !== null) {
        // console.log(data);

        html += `<div class="col-12 col-md-6 col-lg-4 my-4 newsCol">
                  <div class="card h-100">
                  <img src="${data.urlToImage}" class="card-img-top " height=300 alt="${data.source.name}" loading="lazy">
                  <div class="card-body p-3">
                    <h6 class="card-title news-title"><a  href="${data.url}" target="_blank">${data.title}  </a></h6>            
                    <p class="card-text news-desc">${data.description}</p>
                  </div>
                  </div>   
       </div>`;
      }
    });

    newsSection.innerHTML = html;
  }else{
    console.log(false);
    newsSection.innerHTML = `<div class="col-lg-12 my-5">
    <div class="text-center">
      <img src="no-news.webp" alt="no-news-found" class="img-fluid">
      <h4 class="text-danger">Whoops.... Result Not Found!</h4>
    </div>
  </div>`;
  }
}

// ---click  nav link to see the news section

sportBtn.addEventListener("click", function () {
  const URL = `https://newsapi.org/v2/top-headlines?country=in&category=sports&pageSize=40&sortBy=publishedAt&apiKey=${API_key}`;
  fetchNews(URL);
});
techBtn.addEventListener("click", function () {
  const URL = `https://newsapi.org/v2/top-headlines?country=in&category=technology&pageSize=40&apiKey=${API_key}`;
  fetchNews(URL);
});
businessBtn.addEventListener("click", function () {
  const URL = `https://newsapi.org/v2/top-headlines?country=in&category=business&pageSize=40&apiKey=${API_key}`;
  fetchNews(URL);
});
entertainmentBtn.addEventListener("click", function () {
  const URL = `https://newsapi.org/v2/top-headlines?country=in&category=entertainment&pageSize=40&apiKey=${API_key}`;
  fetchNews(URL);
});
generalBtn.addEventListener("click", function () {
  const URL = `https://newsapi.org/v2/top-headlines?country=in&category=general&pageSize=40&apiKey=${API_key}`;
  fetchNews(URL);
});
scienceBtn.addEventListener("click", function () {
  const URL = `https://newsapi.org/v2/top-headlines?country=in&category=science&pageSize=40&apiKey=${API_key}`;
  fetchNews(URL);
});
healthBtn.addEventListener("click", function () {
  const URL = `https://newsapi.org/v2/top-headlines?country=in&category=health&pageSize=40&apiKey=${API_key}`;
  fetchNews(URL);
});
usaBtn.addEventListener("click", function () {
  const URL = `https://newsapi.org/v2/top-headlines?country=us&category=general&pageSize=40&apiKey=${API_key}`;
  fetchNews(URL);
});
chinaBtn.addEventListener("click", function () {
  const URL = `https://newsapi.org/v2/top-headlines?country=jp&category=general&pageSize=40&apiKey=${API_key}`;
  fetchNews(URL);
});

searchBtn.addEventListener('click',async () => {
  const query = searchField.value.trim();
  if(query !== ''){
    try {
      const URL = `https://newsapi.org/v2/everything?q=${query}&pageSize=40&apiKey=${API_key}`;
     fetchNews(URL);
    } catch (error) {
      console.error('Error while searching for search field',error);
    }
  }
})


// --- navbar active elements ----

for (const key in eLink) {
  if (!Object.hasOwnProperty.call(eLink, key)) continue;
    const item = eLink[key];

    // -- get URL 
    const url = new URL(window.location.href);
    const hash = url.hash.slice(1);
    if(hash != ''){
      let getEle = document.querySelector("."+hash);
      getEle.click();
      activeTab(getEle);
    }else if(hash == ''){
      activeTab(eLink[0]);
    }else{
      eLink.forEach((link) => { link.classList.remove('active'); })

    }
    
    item.addEventListener('click',function(){
      activeTab(this)
    });

}


function activeTab(item){
  eLink.forEach((link) => { link.classList.remove('active'); })

  if(!item.classList.contains('active')){
    item.classList.add('active');
  }


}