$(function () {
  // 「主催ユーザー」をクリック → 自己紹介欄を表示
  $(document).on('click', '.admin_role', function () {
    $('.select_admin_user').removeClass('d-none');
  });

  // 「参加ユーザー」をクリック → 自己紹介欄を非表示
  $(document).on('click', '.other_role', function () {
    $('.select_admin_user').addClass('d-none');
  });
});
