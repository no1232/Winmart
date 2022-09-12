<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <!-- -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link rel="stylesheet" href="./css/reset.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
      crossorigin="anonymous"
    />
</head>

<body>
    <div class="contener">
        <header class="row mb">
            <marquee behavior="" direction="">
                <h1>Siêu thị trực tuyến</h1>
            </marquee>
        </header>
        <div class="row mb menu">
            <ul>
                <li><a href="">Trang chủ</a></li>
                <li><a href="">giới thiệu </a></li>
                <li><a href="">liên hệ</a></li>
                <li><a href="">Góp ý</a></li>
                <li><a href="">đóng góp</a></li>
                <li><a href="logout.php">Đăng xuất</a></li>
            </ul>
        </div>
        <div class="row mb">
            <div class="boxtrai mr">
                <div class="row"><div class="banner">
                    <img src="https://cdn-www.vinid.net/c29c782c-20200110_bannerweb_1920x1080.jpg"  alt="">
                </div></div>
                <div class="row">
                    <div class="boxsp">
                        <div class="boxsp_item mr">
                            <div class="boxsp_img">
                                <img src="https://cdn.tgdd.vn/Products/Images/8788/233096/bhx/xoai-keo-tui-1kg-202012311612444485.jpg" alt="">
                            </div>
                            <div class="infro_boxsp">   
                                <p>10 000Vnđ</p>
                                <h4>xoài xanh siêu sạch</h4>
                                <button>Mua </button>
                            </div>
                        </div>
                        <div class="boxsp_item item2 mr">
                            <div class="boxsp_img">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUSEhIVFRIVFRcXFRUXFxcVFxcYFxUWFhcVFxUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy0lICUtLS0tLS0tLS0tKy0tLS0tLi0tLS8tLS0tLS0tLS0tLS0tLS0tLS0uLS0tLS4tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAgMEBQYBB//EAD4QAAIBAgMEBwQKAQMFAQAAAAABAgMRBCExBRJBUQYTMmFxgZEiUqHBFCMzQnKCkqKx0WJDssJTY3Oz4Qf/xAAbAQEAAgMBAQAAAAAAAAAAAAAAAgQBAwUGB//EACsRAAICAQMDBAAGAwAAAAAAAAABAgMRBBIhBTFBMlFhcRMUIoGRoRVCYv/aAAwDAQACEQMRAD8A+4gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHlwD0GNXx9OElGU0pPSOr8bLRd+gxmNp0o71Saiu96+C1b8CLkl5BkkKtWMVeTSXNtJerOaltPEYh/U/UUvfklKrLvjF3jBeN34FT2JQveo3Vn71STm/joUrdfCPp5/omoNm5qdIcIsniKV+6Sl/B5HpFhH/rw83b+TXwhSivZppeSIuUPcXoim+rpexsVEje4faFKfYqwl+GUX/DMm5yk8NRl2qcfREoUXH7KvUhbRX3o/pldG6vqkJdyLpkjqgc9S2tXh9pTVSPvU8pfok7Pya8Db4LH06qvCSdtVpJeMXmi/XfXZ6Wa2mjKABuMAAAAAAAAAAAAAAAAAAAAAAAAA5vbtatWrxwlCq6P1bq1qqSlJRvuxhG+jbvnyRvsXiYU4SqTkowim5SeiSOV2fjurp1sfUi9/EyiqNP7zglalHuvnJ8lmarZJLn9/onFeTgenP/526P10cfWq1Zyju0ZRTlUe97V573ZS5p/Gx1XRTo3FSjVqRipxilGKVlFcfE3WzsOs61d71aera7K4QjyijNeIjpFHC1GohKS7JLwbYwk+5diqqirRtc1dWqeVqjuU77Z5/W6mVk+OC/VUoompjrER3SqUrMoOckblFMyYyJJox1UPN4krmjGwzKc2hUw8Z2ldxmtJRdpLwfyMeFSxOFUv6fqDgaJ0JmbhdrVKWWIW9DhWitP/ACQX+6Poje0qikk4tNNXTTumuafE52nV4ao8oudG86OcW7ypcHzcfdfwfHmem0fU4zWJFGylxOmBi4DHQqx3oPTKSeUovlJcGZR2U01lGgAAyAAAAAAAAAAAAAAAAYe0sfGjDrJqW4n7TinLdXvNLPd71pfkZhGUb5PRmGDkNsYuljsRRwVOXWUo2r4mUXeMYx+ypyfOUne3KFz3G1euxTt9lQThHk5/fflZR/K+Zv5UKOFpVJ0qUKaSlNqEYx3mlxtq+BzWzacoUkpP2s3LLVyd2/VnL6jb+HXz57m6tbpJIurVM9dDxNlbR7c8RZY5ScmdWMUlgnI8jKwijGqNpkXJ9yajkyrkHFPMjTncssR7jGCt62CSJtepi4ltRy11ZhR5JLkyL8FnkSjFnF9GOlLrVqtKcYwlGbVON/acU2ndPinbT3jtYvjqb7tLKmW2ZHKa4JxmZFOqY8knmRjJohXbKqXDNbipIvqUpKXW0Wo1VquE17slxXxRvNl7RjWjdLdnHKcHrF/Ncnx9TSUqtiFaMoyVallUjquE1xjLu/h5nqun9Q8M591OOUdYDE2Zj41qanHwcXrGS1i+9f8A0yz0SaayiqAAZAAAAAAAAAAAAAAABpelbvh3D35wj+5SfwizU1HurPzNn0pptqjZ2arL/wBdQ1uM0POdak1n6LWlWZGO58iO+NxWK7HkHnydeKRbGRZOF/7KEW02zMX4DQpppl1inUtiTj2ISJFVWNyUkwTi8mDgtr4LDUsbSrzm41W3CKTe67prP9TXmjr9nY2M17LTSybTvmsmaTpN0XhiZRqO6lDNNW7nbTmkzS9EnKhWlglCSpwjvqbveTbTbb8ZO3g+R0pxjdSpKTcorlfHwYXD7cM+hRlYnKVymMkkSTOTJYXBLBFuxk0K5jkWjFVsq5ZRicVJGTSrdRVVWP2U8qq5cqniuPc3yR1sWcjQq3Ti9DZdH8Tu3w8n2Vem3xhpu/lbS8GuR7XpWtVkdrOTdXtZvQAds0AAAAAAAAAAAAAAAGj6VJ7lJrhWjf8ARNfM1eMdzddJqd8PJ+5KEvKM1vftuaepnFHnetQbz9FrSvEjCuRbLH3laPHHYiTjEtgylzKp4jgr+hKPcbWzNZFldKeXFeJamTaIYwFI8TJWIN3IvKCPWiiOGje6WZkJhxNkZNjODX1Lp3b+SLaONjLJO/O3Mx9t4GNWk4SlKKtm4txfqjldg4qnQq/RqFKW4nedS3s35uTznLLvLNenU620+V/GPsOXODvEzy5XQndaFtijKPIPI6llbeW7Uj2qb3o9/Bx802vMqMihmmmy/wBOvcJ4K2ohlHVYaupxjOPZkk14NXLTR9GK+VSk/wDTldfhndr9yn8DeHvqrN8FI5TAANhgAAAAAAAAAAAAoxtBVKc6b0nGUX+ZNfM5PBybgr9pZS/EsmvU7JnJ46n1deceE/rI/m7S/UpPzRzOp1bq8m2qWJGNNFTMmuiiSPB3R2TaO1XLKKycnyRGSCIxlg2CKZbYi5PgSjHiyWfYiyyLPJQPUe2JNZXJAg1YkSSPVEwotGMlco31Ob6Q7BdVpqpKEU7tQ9lvxlwXgdO0YuPpb0Gr27y1TY4Ph8juYeAnGKUVK9sld6mzOL2cqNCo4xlKU5yu3KTbk730eS8DrqE8jXqYbZZXZkvBYyeHl7RBiLzRXpltsTIzWUbHZ81HExtpOMovxspr/a/U6U5GpK1ag1/1Ff8AMnH5nWo+g9OlmvHycWz1HoAL5AAAAAAAAAAAAAGi6VYb2I1o60nd/gdlL0sn5M3pGpBNNNXTVmuaZrtgpwcWZTwcepbyuiqSPY0XRqSoy0jnB84Psv5PvROrH0PCdS07jLJ1NNZlYKGzxEmeWOUXiUGSsyCyEpk4tEcFsGiaZi0qjfcjIiyal4IyjgsTzPUiKJ6+JtRrZ5URTURkzXHgUSEv0yEWcJ0oxSwsutUVa93b4G96M7WhiaKqQvbTNNacVfUyNq4JTTulfvV/Ir2RBxSTSXgWL7K5U4x+r3z4+iaTybO5KOqPLFlCN5IoUxbmkRsfBZUV61CP/ci15O/yOvRzOChvYqHKEZSfpupfv+B059A6dDbW/s41jywADoEAAAAAAAAAAAAADy5CVVLVpeZhyS7g1fSHZzqRU4L62ndxXvL70POya70jRYaspxujq6mOprWS8s/4OY2hh4qt1lGS3Z3dSLytL3o+PFc8+LOF1RUSW7cs+Vks070+xXKJWzKb5lMormeNugoy4Z1ISyuSlkpRRKy5nqS5v0NZsyYW0MbClBznJKMVdtktj7RjXpxqwd4yV4vS68GNobNo1o7lWO/B6xeSfjYto4anFJRTSVkkrWSXBLkWIyq2f9Z/bBhsyycWU7y4XJxmjG+Oe5BozadmjFq0iylWSPKlZPWxZsnXOtZfJqSkma7Ed5zlLE476Xu9XS+i37d3v2ty53OsnSiz2lhoria6rYpNNJ+OTY2VWL6cLRcnlfQk6F3qS+gupJReVP7z5r3V3vnyLego3WZK908IzuiuG9mVZ61Gt38Eb2fm234WN8Y2FrQd4Q+4krJWSTWSXkjJPcUQjCCjE5j7gAG0wAAAAAAVYmqoRlN3ajFydtbJXyMCntqnKCnH7yTSffzNlUgmmno1Z+DPm+wk6cJUZNudKpOEr8d2TSfmrPzKGvusqjmBOtJvDOtntx+6vUx6m2Zu9rK/w8zTymR3zxtvVdZLje0dSGmr9jOqYubd3J+pVKqY2+RlMoyssn6pNlqNUV2RkOqRdQx98ORDDZLajI60bxi74VYzsGDK3jxzKOtuRlVQ2Ayd893jmtu9KaGFt11TdctIpOTa52WiNvhsWpRUk8mrrhk1dGyemsjFTa4fYwpJvCM7ePd4pjNEJV+Rp2EsGRKrY8jJlNJcWWuoGvAwXxfMl1phdYTpt8TGwi4mWplqrswy2p2S3ooy38FW7GDbdFnd1pc5RXon/ZvzSdE6NqG81nOcpf8AFP0in5m7PoGkTVMc+xyJdwACyYAAAAAADOG6VYbqMVGul9XXtGb5VIr2W/xRVvyd53Jh7V2fCvSlSnpJarVNZqS707M0air8WDiZTwcVUKrilGcJSoVbKpD0kvuzj3P+1wJTjY8NrdK65t4Orp7co8uRbPTxlHBcUjyLLLEETM4M5MbGytHLV6HOx2y3XlR3W3CClJpq2baS8cjp6iua3C7KhFznupVKlt58XZWV/It0OtJ7l9fZGTfgwMDtpTlNRu+rluyyyTte1+JDC9IqdWrOhGftwWazy556cjY7M2RCjv2Xbk5yu75vUjs/YdGnKc4wSnNtylbN58WbZS063cP4+/kwnI4vp3CnCrh6rpKpWc4wipN7tr30Wru/jxN50uxlelhJSoJ794q6V2k2rtI6HF7OhOUZSim4O8W0nuvS65GTKimrE3roYqTWdvfPnnsR/DeZc9zA2bWqOlT6ztuEd78Vs9O82FJcz10Va3Ikc+yak20b1wiTbtYlDNZleqPYvgasDJKxOBWi+EeQw28IhKWC2nC4xMW47kX7cmoxXe3ZGTSSWbMno/gt+o677MW1Dk5aSl5aeb5Houm6J8fJy9Rbk6HDUVCEYLSMVFeSsXHiPT1iWFgogAGQAAAAAAAwADTdIdiqvFOLUa0L7k+HfCX+L+Gpx8MQ1J0qsdyrHWL/AJT4p80fSTU7d2JSxMbTvGcexUj2o/2u55FDWaKNyyu5OE3FnIzpkGzzF0q2Ge7XV4fdqxzg+6XGEu5+TZbup5pHlNRoJQfCOjVqEyts8uTdN8TzdKEqpRLKsTI6BM8ZEgSySkyRXYkgzOSSZ7fIhY9UTGDOSW8eNXCiThAwZ3EN0kkXxpsthQsbYU2T7I1ytSKYUrmSrJHsppIhhMBLEtOLcKPGfF81TT1/Fou87Oj6e0/dlC7UZGAoTr1HTg2qUftJ8uO7H/Jr015X7OhRUIqMVaMVZLkkV4LDQpwUKcVGK0Xzb4vvMk9Rp6FVH5KLeQACwYAAAAAAAAAAAABCaJgA1+KhdNNXT1TzT7mjlMfsqMb9TN0/8O1T8o3vHydu47epSuYGI2YpEJ1xmsSQOFljpU/tYSt70faj/a80ZEMZTkrxd0+N76m7xexJcDQ47o/ndws/ej7L9Uc+7psZen+zZG2US5QjzJdSjTzwdeHZqNrlON/K6sI4nELWEWu6TXwa+Zy59Ia/1N61bNs8OerDmrW0qi1pS8nF/wDIlHa7406i/K3/AAVv8Xh9mT/NG0+jkvo5q5bVfCnU/SzyO0aj0oz891fzIyulp+GPzRuI00j3fijVOtiJaQivxT/pMlHAVZdqoo90Y3f6pO3wLNfS34ia5anJnyxSXgV0cTOrlRg5rS+kfOby9LluE2RTWck5vnN737ez8Df0IPkdKnp231P+DTK1swcBsJNqVdqb4QV9xePGfnZdx0MYlNOmzJpwZ0YVxgsRRrzklFFqPEj0mAAAAAAAAAAAAAAAAAAAAADyxGVKL1RMAGJU2dTesUY1TYVJ8DaAA0c+jdJlT6MQ5nQgA5xdGI8ycejceZ0AAwaSOwIriX09jwRtAAYkMBFcC6NBItAB4oo9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/9k=" alt="">
                            </div>
                            <div class="infro_boxsp">   
                                <p>40 000Vnđ</p>
                                <h4>Dưa hấu vàng</h4>
                                <button>Mua </button>
                            </div>
                        </div>
                        <div class="boxsp_item">
                            <div class="boxsp_img">
                                <img src="https://cf.shopee.vn/file/24486443be0cf1a33f8b9552c152f0a6" alt="">
                            </div>
                            <div class="infro_boxsp">   
                                <p>5 000Vnđ</p>
                                <h4>Bim bim cay</h4>
                                <button>Mua </button>
                            </div>
                        </div>
                        <div class="boxsp_item">
                            <div class="boxsp_img">
                                <img src="https://healthmart.vn/wp-content/uploads/2018/02/sua-rua-mat-rosette.png" alt="">
                            </div>
                            <div class="infro_boxsp">   
                                <p>100 000Vnđ</p>
                                <h4>Tẩy da chết rosette</h4>
                                <button>Mua </button>
                            </div>
                        </div>
                        <div class="boxsp_item">
                            <div class="boxsp_img">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>
                            <div class="infro_boxsp">   
                                <p>70 000Vnđ</p>
                                <h4>Sữa rửa mặt oxi</h4>
                                <button>Mua </button>
                            </div>
                        </div>
                        <div class="boxsp_item">
                            <div class="boxsp_img">
                                <img src="https://venuko.vn/Upload/2021/12/4/kem-che-khuyet-diem-cho-nam-5091944.png" alt="">
                            </div>
                            <div class="infro_boxsp">   
                                <p>310 000Vnđ</p>
                                <h4>Kem che khuyết điểm V7</h4>
                                <button>Mua </button>
                            </div>
                        </div>
                        <div class="boxsp_item">
                            <div class="boxsp_img">
                                <img src="https://cdn.chiaki.vn/unsafe/0x800/left/top/smart/filters:quality(75)/https://chiaki.vn/upload/product/2019/03/kem-chong-nang-skin-aqua-tone-up-uv-essence-spf-50-pa-5c821512440fe-08032019140906.jpg" alt="">
                            </div>
                            <div class="infro_boxsp">   
                                <p>90 000Vnđ</p>
                                <h4>Kem chống nắng Sunplay</h4>
                                <button>Mua </button>
                            </div>
                        </div>
                        <div class="boxsp_item">
                            <div class="boxsp_img">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>
                            <div class="infro_boxsp">   
                                <p>30 000Vnđ</p>
                                <h4>Milo 1 vỉ 4  hộp</h4>
                                <button>Mua </button>
                            </div>
                        </div>
                        <div class="boxsp_item">
                            <div class="boxsp_img">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>
                            <div class="infro_boxsp">   
                                <p>30 000Vnđ</p>
                                <h4>Sữa ông thọ</h4>
                                <button>Mua </button>
                            </div>
                        </div>
                        <div class="boxsp_item">
                            <div class="boxsp_img">
                                <img src="https://cdn.tgdd.vn/Products/Images/8788/233096/bhx/xoai-keo-tui-1kg-202012311612444485.jpg" alt="">
                            </div>
                            <div class="infro_boxsp">   
                                <p>10 000Vnđ</p>
                                <h4>xoài xanh siêu sạch</h4>
                                <button>Mua </button>
                            </div>
                        </div>
                        <div class="boxsp_item">
                            <div class="boxsp_img">
                                <img src="https://cdn.tgdd.vn/Products/Images/8788/233096/bhx/xoai-keo-tui-1kg-202012311612444485.jpg" alt="">
                            </div>
                            <div class="infro_boxsp">   
                                <p>10 000Vnđ</p>
                                <h4>xoài xanh siêu sạch</h4>
                                <button>Mua </button>
                            </div>
                        </div>
                        <div class="boxsp_item">
                            <div class="boxsp_img">
                                <img src="https://cdn.tgdd.vn/Products/Images/8788/233096/bhx/xoai-keo-tui-1kg-202012311612444485.jpg" alt="">
                            </div>
                            <div class="infro_boxsp">   
                                <p>10 000Vnđ</p>
                                <h4>xoài xanh siêu sạch</h4>
                                <button>Mua </button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="boxphai">
                <div class="row mb box1">
                    <div class="boxtitel"> <p>Tài khoản</p></div>
                    <div class="boxconten">
                        <form action="" method="post">
                            <label for="">Tên đăng nhập</label><br>
                            <input class="ip" type="text" placeholder="canhxuan123" name="username"><br>
                            <label for="">Mật k hẩu</label><br>
                            <input class="ip" type="password"   placeholder="canhxuan123"><br>
                            <input type="checkbox" name="" id="">Nhớ tài khoản  <br>
                            <input type="submit" value="Đăng nhập" name="" id="">
                           
                        </form>
                        <ul>
                            <li><a href="">Quên mật khẩu</a></li>
                            <li><a href="">Đăng kí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitel"><p>danh mục</p> </div>
                    <div class="boxconten2 menudoc">
                        <ul>
                            <li><a href="">Rau củ</a></li>
                            <li><a href="">Hoa quả</a></li>
                            <li><a href="">Đồ hộp</a></li>
                            <li><a href="">Nước ngọt</a></li>
                            <li><a href="">Mĩ phẩm</a></li>
                            <li><a href="">Đồ gia dụng</a></li>
                            <li><a href="">Bánh kẹo</a></li>
                            <li><a href="">Đồ ăn chế biến sẵn</a></li>
                            <li><a href="">Đồ đông lạnh</a></li>
                            <li><a href="">Đồ uống có cồn</a></li>
                        </ul>
                    </div>
                    <div class="boxfooter sreachbox">
                        <form action="">
                            <input type="text" placeholder="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitel"><p>top 10 yêu thích</p> </div>
                    <div class="row boxconten">
                        <div class="row  mb top10_item">
                            <img src="https://cdn.dayphache.edu.vn/wp-content/uploads/2020/06/ly-tra-dao-cam-sa.jpg" alt="">
                            <a href="">Trà đào</a>
                        </div>
                        <div class="row  mb top10_item">
                            <img src="https://cdn.dayphache.edu.vn/wp-content/uploads/2020/06/ly-tra-dao-cam-sa.jpg" alt="">
                            <a href="">Trà đào</a>
                        </div>
                        <div class="row  mb top10_item">
                            <img src="https://cdn.dayphache.edu.vn/wp-content/uploads/2020/06/ly-tra-dao-cam-sa.jpg" alt="">
                            <a href="">Trà đào</a>
                        </div>
                        <div class="row  mb top10_item">
                            <img src="https://cdn.dayphache.edu.vn/wp-content/uploads/2020/06/ly-tra-dao-cam-sa.jpg" alt="">
                            <a href="">Trà đào</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <footer class="row mb"></footer>
    </div>
</body>

</html>