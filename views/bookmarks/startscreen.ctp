<?PHP

echo $this->element('bookmarkbox', array('title' => __("reading list", true), 'bookmarks' => $reading_list));
echo $this->element('bookmarkbox', array('title' => __("newest", true), 'bookmarks' => $newest));
echo $this->element('bookmarkbox', array('title' => __("most visits", true), 'bookmarks' => $most_visits));

?>
