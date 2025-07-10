// Disable target="_blank" (remove this line)
$html = str_replace('<a href="', '<a href=" rel="ugc noopener" target="_blank" ', $html);

// Keep original URL text (comment this out)
// $html = preg_replace('/<a(.*?)>.*?<\/a>/', '<a$1>Website</a>', $html);
