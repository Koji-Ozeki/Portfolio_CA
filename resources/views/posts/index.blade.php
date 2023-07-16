@extends('layouts.app')
 
 @section('title', '')
 
 @section('content') 

 <div id="typingEffect"></div>
 
 <div class="first_contents">
    <img src="{{ asset('storage/images/Porfolio.png') }}" alt="Portfolio Image">
    <table class="introduction">
        <tr>
            <th>名前&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</th>
            <td>おおぜき こうじ<br>大関 晃司</td>
        </tr>
        <tr>
            <th>経歴&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</th>
            <td>食品CRO <br class="st_br">⇒ CRO <br class="st_br">⇒ プログラマー（PG）（現在）</td>
        </tr>
        <tr>
            <th>個人事業&nbsp;:&nbsp;</th>
            <td>キャリアアドバイザー</td>
        </tr>
        <tr>
            <th>趣味&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</th>
            <td>キャンプ、釣り、ゴルフ、ドライブ、登山 etc.</td>
        </tr>
    </table>
</div>

<div class="second_contents">
    <p>私はこれまでCROという医薬品業界専門職をしており、専門業務、営業、面接、PG等を担当しておりました。<br>
    現在はPGとして業務改善ツールやHP作成等を担当しております。<br>
    その傍ら、知人の面接アドバイザーとして面接練習、対策、フォローアップ等を行っており、
    これまでに50人以上の面接アドバイザーをしております。<br>これまでアドバイスをさせていただいた方の9割は志望度の高い会社に入社することができ、それぞれの業界で活躍しております。<br>
    私自身も<span>面接通過率90%以上</span>を誇っており、面接準備・対策には自信があります。<br><br>
    この度、株式会社Onfleek様より業務委託を受け、個人事業主としてキャリアアドバイザーをしております。（もちろん無料です）<br>
    夜遅くの面談も実施しておりますので、お気軽にご連絡ください！<br><br>
    皆様の一助となれるよう努めてまいりますのでよろしくお願いいたします。
    </p>
</div>

<div class="line">
    <h1>LINEの友達追加をしていただいた方限定で【面接対策資料】を<span>期間限定プレゼント</span>しております！</h1>
    <p>※ 詳細は<a href = "{{ route('posts.documents') }}" class = "documents_contents">こちら</a>をご確認ください。</p>
    <h2>まずは相談したいだけでも構いませんので、お気軽に以下LINEよりご連絡ください！！</h2>

    <div style="display: flex; justify-content: center;">
    <a href="https://lf0k57ep.autosns.app/line" class="addfriend_href">
        <img  width="250" src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png">
    </a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
        window.addEventListener("load", function() {
            let url = new URL(window.location.href);
            let get_params = {};
            for(entry of url.searchParams) {
                get_params[entry[0]] = entry[1];
            }
                        get_params['content_element_lp_id'] = "";
                                get_params['scenario_id'] = "";
                                get_params['partner_id'] = "nrwmzZRxJV";
                    for(key in get_params) { 
                let span = document.createElement('span');
                let element_id = `proline-copy-qr-get-params-${key}`;
                span.className = 'proline-copy-qr-get-params';
                span.setAttribute('data-key', key);
                span.setAttribute('data-value', get_params[key]);
                span.setAttribute('id', element_id);
                let old_element = document.querySelector(`#${element_id}`);
                if(old_element) {
                    old_element.remove();
                }
                document.body.appendChild(span);
            }
        });
    </script>
    <script src="https://autosns.jp/js/zbp/jquery.qrcode.min.js"></script>
    <script src="https://autosns.jp/copy-qr/js?height=&show=0"></script>


    </div>


    <script>
        const textLines = [
            "Portfolio",
            "Koji Ozeki"
        ];

        const typingSpeed = 100; // タイピング速度（ミリ秒）

        function typeText(targetElement, text, index, callback) {
            if (index < text.length) {
                targetElement.innerHTML += text.charAt(index);
                setTimeout(() => {
                    typeText(targetElement, text, index + 1, callback);
                }, typingSpeed);
            } else {
                callback();
            }
        }

        function typeLine(targetElement, lineIndex, callback) {
            if (lineIndex < textLines.length) {
                typeText(targetElement, textLines[lineIndex], 0, () => {
                    setTimeout(() => {
                        targetElement.innerHTML += "<br>"; // 改行を追加
                        lineIndex++;
                        typeLine(targetElement, lineIndex, callback);
                    }, 100); // "Portfolio"と"Koji Ozeki"の表示間隔を調整
                });
            } else {
                callback();
            }
        }

        function startTyping() {
            const typingElement = document.getElementById("typingEffect");
            typeLine(typingElement, 0, () => {
                // タイピングが終わった後は何もしない
            });
        }

        // ページが読み込まれたらタイピングを開始
        window.onload = startTyping;
    </script>

 @endsection