<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// 📌 Recursive function to display threaded comments
function displayThreadedComment($comment, $entity_type, $depth = 0) {

?>

    <div class="d-flex align-items-start my-3" data-aos="fade-up" data-aos-easing="linear" id = "comment-<?= $comment['id'] ?>">
        <div class="avatar avatar-sm status-online me-2">
            <img class="rounded-circle" src="https://avatar.iran.liara.run/public?username=<?= $comment['user_name']?>" alt="<?= $comment['user_name'] ?>">
        </div>
        <div class="flex-1">
            <div class="align-items-center">
                <a class="fw-bold mb-0" href="javascript:void(0)"><?= $comment["user_name"] ?></a>
            </div>
			<?php 
				$is_user_liked = false;
				if(!empty($comment['user_liked']) && $comment['user_liked'] >= 1){
					$is_user_liked = true;
				}
			?>
            <p class="mb-0"><?= $comment["comment"] ?></p>
            <div class="post-links d-flex mt-1">
                <a href="javascript:void(0)" class="p-0 me-3 comment-like-btn" data-id = "<?= $comment['id'] ?>" data-type = "comment"><span class="bi <?= $is_user_liked ? 'bi-heart-fill text-danger' : 'bi-heart' ?> me-1 comment-heart-icon"></span> <span class = "comment-like-count"><?= $comment['total_likes'] ?></span> Like</a>
                <a href="<?= base_url() . "reply/" . $comment['entity_id'] . "/" . $comment['id'] . "/" . $comment['entity_type'] ?>" class="p-0 me-3 reply-btn" data-comment-id="<?= $comment['id'] ?>"><span class="bi bi-reply-all me-1"></span> Reply</a>
                <p class="p-0 me-2"><span class="b bi-clock-history me-1"></span> <?= _time_elapsed_string($comment["created_at"]) ?></p>
            </div>

            <!-- 📌 If the comment has replies, recursively display them -->
            <?php if (!empty($comment["replies"])) { ?>
                <?php foreach ($comment["replies"] as $reply) { ?>
                    <?= displayThreadedComment($reply, $entity_type, $depth + 1); ?>
                <?php } ?>
            <?php } ?>


        </div>
    </div>

<?php
}


function _time_elapsed_string($datetime, $full = false) {
	$now = new DateTime();
	$ago = new DateTime($datetime);
	$diff = $now->diff($ago);

	// Store weeks in a separate variable instead of adding it to DateInterval
	$weeks = floor($diff->d / 7);
	$diff->d -= $weeks * 7;

	$string = [
		'y' => 'year',
		'm' => 'month',
		'w' => 'week',
		'd' => 'day',
		'h' => 'hour',
		'i' => 'minute',
		's' => 'second',
	];

	$values = [
		'y' => $diff->y,
		'm' => $diff->m,
		'w' => $weeks,
		'd' => $diff->d,
		'h' => $diff->h,
		'i' => $diff->i,
		's' => $diff->s,
	];

	foreach ($string as $k => &$v) {
		if ($values[$k]) {
			$v = $values[$k] . ' ' . $v . ($values[$k] > 1 ? 's' : '');
		} else {
			unset($string[$k]);
		}
	}

	if (!$full) {
		$string = array_slice($string, 0, 1);
	}

	return $string ? implode(', ', $string) . ' ago' : 'just now';
}

?>
