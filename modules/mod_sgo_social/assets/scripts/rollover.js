window.addEvent('domready', function() {
$$('img.mo').each(function(img) {
  var src = img.getProperty('src');
  var extension = src.substring(src.lastIndexOf('.'),src.length)
  img.addEvent('mouseenter', function() { img.setProperty('src',src.replace(extension,'-mo' + extension)); });
  img.addEvent('mouseleave', function() { img.setProperty('src',src); });
});
});