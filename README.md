# Embedding Scripts & Markup with Google Tag Manager

## Initial Setup

1. Install Docker
2. Install docker-compose
3.  Add hosts file entry `sudo nano /etc/hosts`

    ~~~~
    127.0.0.1       tagmanager.local
    ~~~~
4. Run `docker-compose up`

## Important Information

| Name                  | Value                   |
| ----------------------| ----------------------- |
| Wordpress Username    | `demouser`              |
| Wordpress Password    | `demopassword`          |
| Development URL       | `tagmanager.local`      |
| phpMyAdmin URL        | `tagmanager.local:8181` |
| phpMyAdmin Username   | `root`                  |
| phpMyAdmin Password   | `rootpassword`          |

## Presentation Slides
- Introduction
- Docker / Development environment intro
- GTM Introduction / What is GTM
- Why manage scripts in GTM

https://prezi.com/p/kafq14-bychv/

## Live Coding Tutorial Steps

1. Show docker-compose.yml and explain what it does
2.  Show development environment structure for child theme development
3.  Show header.php and hardcoded add unit
    ~~~~
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Test Ad -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3826857014310556"
         data-ad-slot="4839647306"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    ~~~~

4. [Create GTM Account](https://marketingplatform.google.com/about/tag-manager/)
5. Insert GTM Tags into top of Header and after opening Body Tag as per Google's instructions

    Paste this code as high in the <head> of the page as possible:
    ~~~~
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NVNHL27');</script>
    <!-- End Google Tag Manager -->
    ~~~~

    Additionally, paste this code immediately after the opening <body> tag:
    ~~~~
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVNHL27"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    ~~~~

6. Remove Embedded Ad Code (currently hardcoded into child theme header) leaving googleadunit wrapper div in place

    ~~~~
    <div id="google-headeradunit"></div>
    ~~~~

7. Create new Custom HTML tag in GTM & Insert Javascript Parts of Ad code (Header Ad JS)

    ~~~~
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    ~~~~

8. Set to trigger on all pages

9. Create new Custom HTML tag in GTM & Insert HTML Parts of Ad code (Header Ad HTML)

    For this step we need some additional javascript to append the Ad HTML part to the `google-headeradunit` container
    ~~~~
    <script>
    var el = document.getElementById('google-headeradunit'), elChild = document.createElement('div');
    
    elChild.innerHTML = '<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3826857014310556" data-ad-slot="4839647306" data-ad-format="auto" data-full-width-responsive="true"></ins>';
    
    el.appendChild(elChild);
    </script>
    ~~~~

10. Set to trigger on all pages

11. Demonstrate preview functionality & publish Tag
