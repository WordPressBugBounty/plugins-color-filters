<input type='text' class='ewd-uwcf-min-price' name='min_price' value='<?php echo ( isset( $_GET['min_price'] ) ? esc_attr( intval( $_GET['min_price'] ) ) : 0 ); ?>' />
<span class='ewd-uwcf-text-price-filter-divider'>-</span>
<input type='text' class='ewd-uwcf-max-price' name='max_price' value='<?php echo ( isset( $_GET['max_price'] ) ? esc_attr( intval( $_GET['max_price'] ) ) : $this->get_max_wc_price() ); ?>' />