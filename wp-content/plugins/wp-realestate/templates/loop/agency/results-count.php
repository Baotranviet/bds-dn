<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="results-count">
	<?php
		if ( $total <= $per_page || -1 === $per_page ) {
			/* translators: %d: total results */
			printf( _n( 'Hiển thị kết quả duy nhất', 'Hiển thị tất cả %d kết quả', $total, 'wp-realestate' ), $total );
		} else {
			$first = ( $per_page * $current ) - $per_page + 1;
			$last  = min( $total, $per_page * $current );
			/* translators: 1: first result 2: last result 3: total results */
			printf( _nx( 'Hiển thị kết quả duy nhất', 'Hiển thị <span class="first">%1$d</span> &ndash; <span class="last">%2$d</span> trong số %3$d kết quả', $total, 'with first and last result', 'wp-realestate' ), $first, $last, $total );
		}
	?>
</div>