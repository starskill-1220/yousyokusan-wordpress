<?php get_header(); ?>
  <main>
    <section class="p-contact page-section" id="page-contact">
      <div class="inner question-inner">
        <div class="c-section-heading">
          <h2>お問い合わせ</h2>
          <span>CONTACT</span>
        </div>
        <ul class="p-contact__form-list">
          
          <li class="p-contact__form-item">
            <label for="" class="p-contact__form-label">お名前</label><span class="wpcf7-form-control-wrap" data-name="text-863"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required p-contact__form-input" aria-required="true" aria-invalid="false" placeholder="めだか 太郎" value="" type="text" name="text-863"></span></li>
          <li class="p-contact__form-item">
            <label for="" class="p-contact__form-label">電話番号</label>
            <span class="wpcf7-form-control-wrap" data-name="tel-830"><input size="40" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel p-contact__form-input" aria-required="true" aria-invalid="false" placeholder="080-1234-5678" value="" type="tel" name="tel-830"></span>
          </li>
          <li class="p-contact__form-item">
            <label for="" class="p-contact__form-label">メールアドレス</label>
            <span class="wpcf7-form-control-wrap" data-name="email-628"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email p-contact__form-input" aria-required="true" aria-invalid="false" placeholder="〇〇〇〇@yousyokusan.jp" value="" type="email" name="email-628"></span>
          </li>
          <li class="p-contact__form-item">
            <label class="p-contact__form-label">お問い合わせ内容</label>
            <span class="wpcf7-form-control-wrap" data-name="textarea-197"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required p-contact__form-textarea" aria-required="true" aria-invalid="false" placeholder="例：赤ブチラメキッシングワイドフィン　を2匹、注文希望です。" name="textarea-197"></textarea></span>
          </li>

          <p><input class="wpcf7-form-control wpcf7-submit has-spinner c-btn" id="cvBtn" type="submit" value="入力内容の確認へ"><span class="wpcf7-spinner"></span> <input type="hidden" name="_cf7msm_multistep_tag" class="wpcf7-form-control wpcf7-multistep cf7msm-multistep" value="{&quot;first_step&quot;:1,&quot;next_url&quot;:&quot;http:\/\/localhost:8888\/starskill_03\/contact\/confirm&quot;}"><input type="hidden" name="cf7msm-no-ss" value=""></p>
        </ul>
    </section>
    
    <!-- <ul class="p-contact__form-list">
      <li class="p-contact__form-item">
        <label for="" class="p-contact__form-label">問い合わせ項目</label>[radio radio-893 use_label_element class:p-contact__form-radio default:1 "ウェブサイト制作について" "LP制作について" "サイト運用保守について" "その他"]</li>
      <li class="p-contact__form-item">
        <label for="" class="p-contact__form-label">お名前</label>[text* text-863 class:p-contact__form-input placeholder "星野 太郎"]</li>
      <li class="p-contact__form-item">
        <label for="" class="p-contact__form-label">電話番号</label>[tel* tel-830 class:p-contact__form-input placeholder "080-1234-5678"]</li>
      <li class="p-contact__form-item">
        <label for="" class="p-contact__form-label">メールアドレス</label>[email* email-628 class:p-contact__form-input placeholder "contact@star-skill.jp"]</li>
      <li class="p-contact__form-item">
        <label for="" class="p-contact__form-label">会社名</label>　　　　　　　　　　　　　　　　　[text* text-408 class:p-contact__form-input placeholder "株式会社〇〇"]</li>
      <li class="p-contact__form-item">
        <label class="p-contact__form-label">お問い合わせ内容</label>　　　　　　　　　　　　　　　　[textarea* textarea-197 class:p-contact__form-textarea placeholder "例：ホームページを作りたいのですが、○ページの量だとどのくらいの費用がかかりますか？"]</li>[honeypot hayato-taisaku]
      <p>[submit class:c-btn id:cvBtn "入力内容の確認へ"] [multistep multistep-313 first_step "http://localhost:8888/starskill_03/contact/confirm"]</p>
    </ul> -->
  </main>
<?php get_footer(); ?>