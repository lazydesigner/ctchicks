<div class="slide-to-top" id="slide-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
        <path d="M13.0001 7.82843V20H11.0001V7.82843L5.63614 13.1924L4.22192 11.7782L12.0001 4L19.7783 11.7782L18.3641 13.1924L13.0001 7.82843Z"></path>
    </svg>
</div>

<footer>

    <div class="footer-container">
        <!-- <p>Ctchicks</p> -->
        <div style="width: 100px;"><img src="<?=get_url() ?>home/assets/images/logo.webp" width="100%"
        height="100%" alt="ctckicks escort service  logo" loading="lazy"></div>
        <ul>
            <li>Home</li>
            <li>Contact Us</li>
            <li>Terms of Use & Policy</li>
            <li>Sitemap</li>
        </ul>
        <p>Follow us</p>
        <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Pinterest</li>
        </ul>
        <small>copyright &copy; 2024 ctchicks.com All right reserved</small>
    </div>

</footer>
<script>
    if (!window.location.href.endsWith('/')) {
        // Add a trailing slash to the URL
        window.history.replaceState(null, null, window.location.href + '/');
        z
    }

    function showSearch() {
        var search_menu = document.querySelector('.search-bar')
        search_menu.classList.toggle('search-bar-show')
    }
    // Get the button
    var scrollToTopBtn = document.getElementById("slide-to-top");

    // When the user scrolls down 500px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            scrollToTopBtn.classList.add("slide-to-top2");
        } else {
            scrollToTopBtn.classList.remove("slide-to-top2");
        }
    }

    // Smooth scroll to top when button is clicked
    scrollToTopBtn.addEventListener("click", function() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    });


    document.getElementById('city').addEventListener('keyup', (e) => {      

        if (e.target.value.trim() != '') {
            let cityName = e.target.value;
            const formData = new FormData();
            formData.append('name', cityName);
            formData.append('finding', 'cityName');
            formData.append('cat', document.getElementById('category').value);
            fetch('<?=get_url() ?>home/search_for_city_or_area.php', {
                    method: 'POST',
                    body: formData
                }).then(res => res.json())
                .then(data => {
                    if (data['status'] == 200) {
                        document.getElementById('all-list-of-cities').style.display = 'block';
                        document.getElementById('table').innerHTML = data['city']
                    } else {
                        document.getElementById('all-list-of-cities').style.display = 'block';
                        document.getElementById('table').innerHTML = data['city']
                    }
                })
        } else {
            document.getElementById('all-list-of-cities').style.display = 'none'
            document.getElementById('table').innerHTML = ''
        }


    })

    
            document.addEventListener('click', () => {
            document.getElementById('all-list-of-cities').style.display = 'none';
            document.getElementById('table').innerHTML = '';
            document.getElementById('city').value = '<?php if(isset($city)){echo trim(ucwords($city));} ?>';
        })

        <?php 
        if(isset($city)){ ?>
        SearchLocality()
        function SearchLocality(){
            const formData = new FormData();
            formData.append('name', '<?php if(isset($city)){echo $_GET['city'];} ?>');
            formData.append('area', '<?php if(isset($area)){echo $_GET['area'];} ?>');
            formData.append('finding', 'areaName');
            formData.append('cat', document.getElementById('category').value);
            fetch('<?=get_url() ?>home/search_for_city_or_area.php', {
                    method: 'POST',
                    body: formData
                }).then(res => res.json())
                .then(data => {
                    if (data['status'] == 200) {
                        document.getElementById('locality').innerHTML = data['area']
                        document.getElementById('areasOfCity').innerHTML = data['arealist']
                        console.log(data)
                    }
                })
        }
        
        <?php }  ?>

        


        document.getElementById('locality').addEventListener('change',(e)=>{
           area = e.target.value;   
           city = '<?=$_GET['city'] ?>';
           cat = document.getElementById('category').value;

           window.location.href='<?=get_url()?>'+cat+'/'+city.toLowerCase()+'/'+area+'/';

        })
        const questions = document.querySelectorAll(' .question');
    questions.forEach(question => {
        question.addEventListener('click', () => {
            question.classList.toggle('active');
        });
    });

</script>