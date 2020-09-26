jQuery(document).ready(function($) {
    $.ajax({
        url: "http://quittingweedthebook.com/blog/wp-json/wp/v2/posts?_embed=1",
        type: "get",
        success: function(data) {
            const posts = data;
            console.log(posts);
            const cardContainer = document.getElementById("post-cont");

            const postData = posts.map(post => {
                return {
                    name: post.title.rendered,
                    img_url: post.better_featured_image.source_url,
                    link: post.link,
                    category: post._embedded["wp:term"][0][0].name,
                    excerpt: post.excerpt.rendered
                };
            });
            console.log(postData);

            function getPosts(start = 0, end = 4) {
                let galleryHTML = "";
                let slideView = postData.slice(start, end);
                slideView.forEach(post => {
                    galleryHTML += `
                
                
                    <div class="post-card"> 
                        <div class="card-content">
                            <a href="${post.link}"><img src="${
                        post.img_url
                    }" alt=${post.name}/></a>
                            <a class="post-cat" href="/qw-blog/category/${post.category.toLowerCase()}"><h4>${
                        post.category
                    }</h4></a>
                            <a href="${post.link}"><h4>${post.name}</h4></a>
                            ${post.excerpt}
                        </div>
                    </div>
                
                `;
                });
                cardContainer.innerHTML = galleryHTML;
            }
            let firstSlide = 0;
            let lastSlide = 4;
            getPosts();
            function slider(direction) {
                if (direction == "left" && firstSlide >= 4) {
                    firstSlide -= 4;
                    lastSlide -= 4;
                    getPosts(firstSlide, lastSlide);
                } else if (
                    direction == "right" &&
                    lastSlide < postData.length
                ) {
                    firstSlide += 4;
                    lastSlide += 4;
                    getPosts(firstSlide, lastSlide);
                }
            }
            // Get screen width
            // function checkScreenWidth() {
            //     let width =
            //         window.innerWidth > 0 ? window.innerWidth : screen.width;
            //     console.log(width);
            //     if (width > 1400) {
            //         getGallery(4);
            //     } else if (width <= 1400 && width >= 1021) {
            //         getGallery(3);
            //     } else if (width < 1021 && width >= 731) {
            //         getGallery(2);
            //     } else if (width <= 730) {
            //         getGallery(1);
            //     }
            // }
            // //On load
            // checkScreenWidth();

            // //Media queries
            // window.addEventListener("resize", checkScreenWidth);
            //Button listens
            $("#left").on("click", () => slider("left"));
            $("#right").on("click", () => slider("right"));
        },
        error: function(xhr, ajaxOptions, thrownError) {
            var errorMsg = "Ajax request failed: " + xhr.responseText;
            jQuery("#content").html(errorMsg);
        }
    });
});
