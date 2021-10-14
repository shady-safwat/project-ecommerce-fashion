
// Featured Item
    //   1. change active for navbar
    let navbarLinks = document.querySelectorAll('.featuredItems  .navbar .nav .nav-item .nav-link');

    for(let i=0; i<navbarLinks.length; i++){
        navbarLinks[i].addEventListener('click',function(){
            for(let j=0; j<navbarLinks.length; j++){
                navbarLinks[j].classList.remove('active');
            }
            navbarLinks[i].classList.add('active');
        });
    }

    //  2. when clik on all links show all sections
    // sections
    let sectionAll = document.querySelector('.featuredItems .featuredCards .all');
    let sectionMen = document.querySelector('.featuredItems .featuredCards .men');
    let sectionWomen = document.querySelector('.featuredItems .featuredCards .women');
    let sectionKids = document.querySelector('.featuredItems .featuredCards .kids');
    // navbar-links
    let navAll = document.querySelector('.featuredItems  .navbar .nav .nav-item .nav-all');
    let navMen = document.querySelector('.featuredItems  .navbar .nav .nav-item .nav-men');
    let navWomen = document.querySelector('.featuredItems  .navbar .nav .nav-item .nav-women');
    let navKids = document.querySelector('.featuredItems  .navbar .nav .nav-item .nav-kids');


    // All
    navAll.addEventListener('click',function(){
        sectionAll.style.display = 'block';
        sectionMen.style.display = 'none';
        sectionWomen.style.display = 'none';
        sectionKids.style.display = 'none';
    });

    // Men
    navMen.addEventListener('click',function(){
        sectionMen.style.display = 'block';
        sectionAll.style.display = 'none';
        sectionWomen.style.display = 'none';
        sectionKids.style.display = 'none';
    });

    // Women
    navWomen.addEventListener('click',function(){
        sectionWomen.style.display = 'block';
        sectionAll.style.display = 'none';
        sectionMen.style.display = 'none';
        sectionKids.style.display = 'none';
    });

    // Kids
    navKids.addEventListener('click',function(){
        sectionKids.style.display = 'block';
        sectionAll.style.display = 'none';
        sectionMen.style.display = 'none';
        sectionWomen.style.display = 'none';
    });

    // 3. dynamic padding shopping-sections when click on navbar links
    let shoppingSections = document.querySelectorAll('.shopping-cards .shopping-sections');
    let navBar = document.querySelector('.FeaturedItems .navbar');

    for(k=0; k<shoppingSections.length;k++){
        shoppingSections[k].style.paddingTop = navBar.clientTop + 'rem';
    }


    // When click on load more in Trending show paragraph_hiddden
    // When click on load less in Trending hidden paragraph_hiddden
    let paragraph_trending = document.querySelectorAll('.trendingItem .hidden');
    let loadMore = document.querySelector('.trendingItem .buttons-trending .more');

    for(let i=0; i<paragraph_trending.length; i++){
        loadMore.addEventListener('click',function(){
            if(paragraph_trending[i].style.display == 'none'){
                paragraph_trending[i].style.display = 'block';
                loadMore.innerHTML = 'Load Less';
            }else{
                paragraph_trending[i].style.display = 'none';
                loadMore.innerHTML = 'load More';
            }
        });
    }


    // When click on load more in blog show paragraph_hiddden
    // When click on load less in blog hidden paragraph_hiddden
    let paragraph_hidden = document.querySelectorAll('.blog .cards .body-cards .paragraph_hidden');
    let ReadMore = document.querySelectorAll('.blog .cards .body-cards .buttons-blog .more');


    for(let i=0; i<loadMore.length; i++){
        for(let i=0; i<paragraph_hidden.length;i++){
            ReadMore[i].addEventListener('click',function(){
                if(paragraph_hidden[i].style.display == 'none'){
                    paragraph_hidden[i].style.display = 'block';
                    ReadMore[i].innerHTML = 'Read Less';
                }else{
                    paragraph_hidden[i].style.display = 'none';
                    ReadMore[i].innerHTML = 'Read More';
                }
            });
        }
    }


