<!DOCTYPE html>
<html lang="ja">

<head>
    <title>履歴書登録</title>
    <link rel="stylesheet" href="css/main.css">
    <!-- style情報
        fieldsetのデフォルトstyle
            fieldset {
                display: block;
                margin-inline-start: 2px;
                margin-inline-end: 2px;
                padding-block-start: 0.35em;
                padding-inline-start: 0.75em;
                padding-inline-end: 0.75em;
                padding-block-end: 0.625em;
                min-inline-size: min-content;
                border-width: 2px;
                border-style: groove;
                border-color: threedface;
                border-image: initial;
            }
        divのデフォルトstyle
            div {
                display: block;
            }
    -->
</head>

<body>

    <header class="MobileHeader">
        <div class="HeaderOverBG"></div>
        <div class="HeaderElement">
            <div class="CompanyLogoFlame">
                <a href="http://nebulasoft.co.jp/"><img class="CompanyLogo" src="img/logo.png"></a>
            </div>
            <h1 class="Heading">履歴書登録 - 個人情報</h1>
        </div>
    </header>

    <!-- 個人情報の登録 -->
    <section class="PersonalInfo">
        <script type="text/javascript" src="js/RegistionForm.js">
            // 無効になるのでこの空白にコードを入力しないでください。
        </script>
        <form name="PersonalInfo" class="register" action="{{url('user/store')}}" method="post" accept-charset="UTF-8" target="_self">
            @csrf
            <!--Keyword説明
                required: 入力必須属性
            -->
            <fieldset>
                <legend>注釈</legend>
                <div class="Annotation">
                    <p>“<mark>&nbsp;*&nbsp;</mark>”&nbsp;項目は入力必須です。</p>
                </div>
            </fieldset>

            <fieldset>
                <legend>姓</legend>
                <div class="LastName">
                    <p><label>姓&emsp;&emsp;&thinsp;&thinsp;&thinsp;：</label><input type="text" name="LastName" size="20" maxlength="20" required><mark>&nbsp;*</mark></p>
                    <p><label>姓(カナ)：</label><input type="text" name="LastNameKana" size="20" maxlength="20"></p>
                    <p><label>姓(英語)：</label><input type="text" name="LastNameEnglish" size="20" maxlength="20" required><mark>&nbsp;*</mark></p>
                </div>
            </fieldset>

            <fieldset>
                <legend>名</legend>
                <div>
                    <p><label>名&emsp;&emsp;&thinsp;&thinsp;&thinsp;：</label><input type="text" name="FirstName" size="20" maxlength="20" required><mark>&nbsp;*</mark></p>
                    <p><label>名(カナ)：</label><input type="text" name="FirstNameKana" size="20" maxlength="20"></p>
                    <p><label>名(英語)：</label><input type="text" name="FirstNameEnglish" size="20" maxlength="20" required><mark>&nbsp;*</mark></p>
                </div>
            </fieldset>

            <fieldset>
                <legend>性別</legend>
                <div class="Sex">
                    <p>
                        <label></label><input type="radio" name="Sex" value="1 " required>男&emsp;</label>
                        <label></label><input type="radio" name="Sex" value="2" required>女&emsp;</label>
                        <mark>*</mark>
                    </p>
                </div>
            </fieldset>

            <fieldset>
                <legend>個人情報</legend>
                <div>
                    <p><label>生年月日：</label><input type="text" name="Birthday" placeholder="YYYY/MM/DD" maxlength="10" size="10" required><mark>&nbsp;*</mark></p>
                    <p>
                        <label>国&emsp;&emsp;籍：</label>
                        <select name="Country" required>
                            <optgroup label="アジア">
                                <option value="0" selected>日本</option>
                                <option value="1" >中国</option>
                                <option value="2" >韓国</option>
                            </optgroup>
                        </select>
                        <mark>*</mark>
                    </p>
                </div>
            </fieldset>

            <fieldset>
                <legend>住所</legend>
                <div class="address">
                    <p><label>都道府県＆市区町村：</label><input type="text" name="Municipality" placeholder="都道府県、市区町村を入力してください" size="30" maxlength="40" required><mark>&nbsp;*</mark></p>
                    <p><label>建物名＆部屋番号&ensp;&ensp;：</label><input type="text" name="Building" placeholder="建物名、部屋番号を入力してください" size="30" maxlength="100"></p>
                    <p><label>最寄り&emsp;駅：</label><input type="text" name="Station" size="17" maxlength="20"></p>
                </div>
            </fieldset>

            <fieldset>
                <legend>履歴</legend>
                <div>
                    <p>
                        <label>最終学歴：</label>
                        <!-- value暫定 -->
                        <select name="EB" required>
                            <option value="1" selected>大学院</option>
                            <option value="2" >大学</option>
                            <option value="3" >短期大学</option>
                            <option value="4" >専門学校</option>
                        </select>
                        <mark>*</mark>
                    </p>
                    <p>
                        <label>卒業年月：</label>
                        <input type="text" name="Graduation" placeholder="YYYY/MM" maxlength="7" size="3" required>
                        <mark>*</mark>
                        <!-- value暫定 -->
                        <select name="GraduationType" required>
                            <option value="1" selected>卒業</option>
                            <option value="2" >中退</option>
                        </select>
                        <mark>*</mark>
                    </p>
                    <p><label>学&emsp;&emsp;校：</label><input type="text" name="School" size="20" maxlength="40" required><mark>&nbsp;*</mark></p>
                    <p><label>学&emsp;&emsp;部：</label><input type="text" name="Department" size="20" maxlength="40" required><mark>&nbsp;*</mark></p>
                </div>
            </fieldset>

            <fieldset>
                <legend>募集職種</legend>
                <div>
                    <!-- 全てのcheckboxにrequireを入れる後で確認する -->
                    <p>
                        <label><input type="checkbox" name="Position" value="0" require>PM&emsp;</label>
                        <label><input type="checkbox" name="Position" value="1" require>PL&emsp;</label>
                        <label><input type="checkbox" name="Position" value="2" require>SE&emsp;</label>
                        <label><input type="checkbox" name="Position" value="3" require>PG&emsp;</label>
                        <mark>*</mark>
                    </p>
                    <p><label>経験年数：</label><input type="text" name="Experience" placeholder="YY/MM" maxlength="5" size="5" required><mark>&nbsp;*</mark></p>
                </div>
            </fieldset>

            <fieldset>
                <legend>操作</legend>
                <div class="Process">
                    <p>
                        <input type="submit" value="情報を登録"> &emsp;
                        <input type="reset" value="全てリセット">
                    </p>
                </div>
            </fieldset>

        </form>
    </section>

</body>

</html>

<!-- HTML5タグ参照サイト：http://www.htmq.com/html5/ -->