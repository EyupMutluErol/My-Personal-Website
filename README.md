# Kişisel Portfolyo Web Sitesi

Bu proje, kendimi, ilgi alanlarımı, projelerimi ve iletişim bilgilerimi içeren kişisel bir portfolyo web sitesidir. Sitede dinamik içerikler ve kullanıcı etkileşimi için PHP kullanılmıştır.

## Açıklama

Bu portfolyo sitesi, benim hakkımda daha fazla bilgi edinmek isteyenler için bir merkez görevi görmektedir. Ana sayfada kendimi tanıtıyor, sevdiğim oyunlardan ve Formula 1 pilotlarından bahsediyorum. Kullanıcıların benimle iletişime geçebilmesi için bir iletişim formu bulunmaktadır; bu form PHP ile işlenmekte ve gönderilen mesajlar bir onay sayfasında kullanıcıya gösterilmektedir. Ayrıca yaşadığım şehri tanıttığım bir bölüm, özgeçmişimin bulunduğu bir CV sayfası ve PHP ile backend kontrolü yapılan bir kullanıcı giriş (login) sistemi de mevcuttur. Tuttuğum spor takımına adanmış bir sayfanın yanı sıra, bir film API'sine istek atarak girilen film hakkında bilgi getiren dinamik bir "İlgi Alanım" sayfası da bulunmaktadır.

## Özellikler

Sitemin öne çıkan özellikleri şunlardır:

* **Ana Sayfa:**
    * Kapsamlı bir kişisel tanıtım.
    * Favori video oyunları ve Formula 1 pilotları hakkında bilgiler.
* **İletişim Sayfası:**
    * Kullanıcıların mesaj gönderebileceği bir iletişim formu.
    * PHP tabanlı form işleme: Gönderilen mesajın ayrı bir sayfada kullanıcıya gösterilmesi.
* **Benim Şehrim Sayfası:**
    * Yaşadığım şehrin tanıtımı, önemli yerleri ve kültürel özellikleri.
* **CV Sayfası:**
    * Eğitim, iş deneyimi, beceriler ve diğer önemli bilgileri içeren güncel özgeçmişim.
* **Giriş (Login) Sayfası:**
    * PHP ile backend doğrulaması yapılan kullanıcı giriş sistemi. 
* **Takımımız Sayfası:**
    * Desteklediğim spor takımı hakkında bilgiler, tarihçe veya güncel durumlar.
* **İlgi Alanım Sayfası (`ilgiAlanim.php`):**
    * Harici bir film API'si ile entegrasyon.
    * Kullanıcının girdiği film adına göre API'den film bilgilerini (örneğin; yönetmen, oyuncular, çıkış yılı, puanı vb.) çekip gösterme.

## Kullanılan Teknolojiler

Bu projenin geliştirilmesinde aşağıdaki teknolojiler kullanılmıştır:

* **HTML5:** Web sayfalarının temel yapısı ve içeriği.
* **CSS3:** Sayfaların görsel tasarımı ve stil düzenlemeleri.
* **(Bootstrap veya diğer CSS Framework'leri):** Bootstrap: Duyarlı (responsive) tasarım ve hazır bileşenler için.
* **PHP:**
    * Sunucu taraflı programlama.
    * İletişim formu verilerinin işlenmesi.
    * Kullanıcı giriş (login) sistemi ve oturum yönetimi.
    * Harici API'lere (Film API'si) istek gönderme ve gelen veriyi işleme.


## Nasıl Çalıştırılır/Görüntülenir

Projenin PHP tabanlı özelliklerinin (iletişim formu, giriş sistemi, film API'si) düzgün çalışabilmesi için bir web sunucusu ortamına (örneğin XAMPP, WAMP, MAMP veya bir hosting hizmeti) ihtiyaç vardır.

1.  **Proje Dosyalarını Sunucuya Yükleyin:**
    * Eğer yerel bir sunucu (XAMPP, WAMP, MAMP vb.) kullanıyorsanız, proje dosyalarını sunucunuzun `htdocs` (XAMPP için) veya `www` (WAMP/MAMP için) klasörüne kopyalayın.
    * Eğer bir hosting hizmeti kullanıyorsanız, dosyaları FTP veya hosting paneliniz aracılığıyla sunucunuza yükleyin.
2.  **Sunucuyu Başlatın:**
    * Yerel sunucu kullanıyorsanız, Apache ve MySQL (eğer veritabanı kullanılıyorsa) servislerini başlatın.
3.  **Tarayıcıda Açın:**
    * Web tarayıcınızı açın ve adres çubuğuna projenizin yerel sunucudaki adresini yazın (örn: `http://localhost/proje-klasor-adiniz/`) veya hosting alan adınızı girin.
    * `anasayfa.html` otomatik olarak yüklenmelidir.


## İletişim 

* **Ad Soyad:** Eyüp Mutlu Erol
* **GitHub:** [https://github.com/EyupMutluErol]
* **E-posta:** [eyupmutluerol@gmail.com]

