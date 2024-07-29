function createSlug() {
  let title = $("#title").val();
  $("#slug").val(string_to_slug(title));
}
//   setiap value yang diinput pada #title, makan akan diubah melalui fungsi string_to_slug, dan akan dimasukkan kedalam #slug

/* digunakan untuk mengubah sebuah string menjadi bentuk slug 
yang cocok untuk digunakan dalam URL dengan menghapus 
karakter tidak valid, mengubah huruf besar menjadi kecil, dan mengganti spasi dengan tanda hubung. */
function string_to_slug(str) {
  str = str.replace(/^\s+|\s+$/g, ""); // trim
  str = str.toLowerCase();

  // remove accents, swap ñ for n, etc
  var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
  var to = "aaaaeeeeiiiioooouuuunc------";
  for (var i = 0, l = from.length; i < l; i++) {
    str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
  }

  str = str
    .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
    .replace(/\s+/g, "-") // collapse whitespace and replace by -
    .replace(/-+/g, "-"); // collapse dashes

  return str;
}
