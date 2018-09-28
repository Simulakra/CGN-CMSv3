<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h4 class="stacked-title">ETKİNLİK TAKVİMİ & HABERLER</h4>

            <div class="carousel-wrapper">
                <div class="row">
                    <ul class="owl-carousel carousel-fw" id="services-slider" data-columns="4" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no">
 
    <?php 
            $sql = ""; 
            $sql = "select * from 35cgnpress where id > 0 ORDER BY date DESC;"; 
            $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 

            while ($row = mysqli_fetch_array($result)) { 
                $text = $row['desci']; 
         
                $text = substr($text, 0, 60,"..."); 
                echo '<li class="item"> 
                                        <div class="service-grid-item grid-item format-standard"> 
                                            <div class="news-image">
                                            <a class="image-link" href="../news/' . $row['id'] . '"  class="media-box2"><img class="image-self" src="../cms/modules/news/'; 
                echo $row['link']; 
                echo ' " ></a> 
                </div>
                                            <div class="grid-item-inner"> 
                                                <h4><a href="../news/' . $row['id'] . '">' . $row['title'] . '</a></h4> 
                                                <h6><a href="../news/' . $row['id'] . '">' . $row['keywords'] . '</a></h6> 
                                                <p>' . $text . '</p> 
                                                <a href="../news/' . $row['id'] . '" class="more">devamını oku</a> 
                                            </div> 
                                        </div> 
                                      </li>'; 
            } 
    ?> 
                    </ul>
                </div>
            </div>
        </div>
        <div class="spacer-40 visible-sm visible-xs"></div>
        <div class="col-md-4">
            <h4 class="stacked-title">CGN ELEKTRONİK HİZMETLERİMİZ</h4>

            <div class="spacer-30"></div>
            <div class="accordion" id="accordionArea">
                <div class="accordion-group panel">
                    <div class="accordion-heading accordionize">
                        <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordionArea"
                           href="#oneArea">Garanti Kapsamı<i class="fa fa-angle-down"></i> </a>
                    </div>
                    <div id="oneArea" class="accordion-body in collapse">
                        <div class="accordion-inner">Ürünlerimizin kalitesine güvenimizden dolayı sizlerin de bu güveni bizlere duymanızı bekleriz. Ürünlerimizin kullanım kılavuzundaki kullanım talimatları takibinde ürün garanti sürelerimiz, aldığınız ürünün en verimli ve en sağlıklı çalışacağı zaman dilimini temsil etmektedir. Kullandığınız ürünün bakımları veya gösterdiğiniz ilgi ile bu süre uzayabilir, kısalamaz.
                        Bu misyonumuzun garantisini verdiğimiz ürünlerimizin ortalama garanti süreleri aşağıdaki gibidir;
                        -Bilgisayar Ürünleri : 1 Yıl - 2 Yıl Arası
                        -Ev Eşyaları : 2 Yıl - 3 Yıl Arası
                        </div>
                    </div>
                </div>
                <div class="accordion-group panel">
                    <div class="accordion-heading accordionize">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twoArea">Teknik Destek<i class="fa fa-angle-down"></i> </a>
                    </div>
                    <div id="twoArea" class="accordion-body collapse">
                        <div class="accordion-inner">Aldığınız veya alacağınız ürünler arasında ayrım yapmaksızın CGN Elektronik olarak sizlere ihtiyacınız olan desteği vermeye hazırız. Aklınızda belirlediğiniz bir veya birden fazla ürün hakkındaki teknik uzmanlarımızdan alacağınız desteğimiz ile piyasa araştırmasını rahatça yapabilecek ve beraberinde sunduğumuz hizmetin rakiplerimize göre ne kadar farklı bir seviyede olduğuna tanık olacaksınız.
                        Aynı zamanda sistem analizi ekiplerimiz ile ihtiyacınız olan en kaliteli ve işlevli elektronik ürünlerin tanımlanmasını sizlere uygun ve sizlere özel fiyatlarımızla sağlayabilirsiniz. Sistem analiz ekiplerimizin çıkaracağı analiz raporlarının devamında alabileceğiniz gereksiz ürünlere para harcamamış ve tam olarak ihtiyacınız ürünleri edinmenize bir adım daha yaklaşmış olacaksınız.
                        </div>
                    </div>
                </div>
                <div class="accordion-group panel">
                    <div class="accordion-heading accordionize">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea"
                           href="#threeArea">Uzun Vadeli Güven<i class="fa fa-angle-down"></i> </a>
                    </div>
                    <div id="threeArea" class="accordion-body collapse">
                        <div class="accordion-inner">Birçok elektronik mağazasının istemli veya istemsiz olarak müşterilerine karşılaştırdığı "ürün satışı sonrası hizmet alamama" sorununu biz CGN Elektronik olarak kaldırıyoruz. Ürünümüz bizim mağazalarımızdan çıktıktan sonra da ismimizi taşıdığından sizlerin ürün kullanımı sürecinizdeki her türlü sıkıntınıza en uygun çözümleri bulmaya çalışıyoruz. Ürününüz hakkında soracağınız her türlü sorunuza güler yüzlü çalışanlarımızın içtenliği ile cevaplıyoruz.
                        Asıl hedefimiz olan huzurlu müşterileri sağlamaya çalışıyoruz. Ve bu konuda sizlerin de saygısını ve anlayışını bekliyoruz. 
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>