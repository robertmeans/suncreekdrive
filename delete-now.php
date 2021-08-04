		// different last names, both have email addresses
		if (($o1ln !== $o2ln) && ($o1em !== "" && $o2em !== "")) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o1em . "\">" . $o1fn . " " . $o1ln . "</a> <br />" . "<a href=\"mailto:" . $o2em . "\">" . $o2fn . " " . $o2ln . "</a></p>";

		// different last names, same email addresses
		} elseif (($o1ln !== $o2ln) && (($o1em === $o2em) && ($o1em !== ""))) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o1em . "\">" . $o1fn . " " . $o1ln . "<br />" .  $o2fn . " " . $o2ln . "</a></p>";

		// 2 owners, neither has email
		} elseif (($o1ln !== $o2ln) && (($o1em === "") && ($o2em === ""))) {
			echo "<p class=\"pad\">" . $o1fn . " " . $o1ln . "<br />" .  $o2fn . " " . $o2ln . "</p>";

		// 1 owner, no email
		} elseif (((($o1fn !== "") && ($o1em === "")) && (($o2fn === "") && ($o2ln === "")))) {
			echo "<p class=\"pad\">" . $o1fn . " " . $o1ln . "</p>";	


		// 1 owner, no email and for some reason entered as owner2
		} elseif (((($o2fn !== "") && ($o2em === "")) && (($o1fn === "") && ($o1ln === "")))) {
			echo "<p class=\"pad\">" . $o2fn . " " . $o2ln . "</p>";

		// different last names, owner1 has email, owner2 does not
		} elseif (($o1ln !== $o2ln) && ($o1em !== "" && $o2em === "")) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o1em . "\">" . $o1fn . " " . $o1ln . "</a> <br />" 
			. $o2fn . " " . $o2ln . "</p>";

		// different last names, owner1 does not have email, owner2 does
		} elseif (($o1ln !== $o2ln) && ($o1em === "" && $o2em !== "")) {
			echo "<p class=\"pad\">" . $o1fn . " " . $o1ln . "<br />" 
			. "<a href=\"mailto:" . $o2em . "\">" . $o2fn . " " . $o2ln . "</a></p>";

		// same last names, owner1 has email address, owner2 does not
		} elseif (($o1ln === $o2ln) && (($o1em !== "") && ($o2em === ""))) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o1em . "\">" . $o1fn . "</a> &amp; " . $o2fn . "</a> " . $o1ln . "</p>";

		// same last names, same email (trying to cover the extreme here)
		} elseif (($o1ln === $o2ln) && ($o1em === $o2em)) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o1em . "\">" . $o1fn . " &amp; " . $o2fn . " " . $o1ln . "</a></p>";

		// same last names, owner1 does not have email address, owner2 does
		} elseif (($o1ln === $o2ln) && (($o1em === "") && ($o2em !== ""))) {
			echo "<p class=\"pad\">" . $o1fn . " &amp; " . "<a href=\"mailto:" . $o2em . "\">" . $o2fn . "</a> " . $o1ln . "</p>";

		// same last names and both have email addresses
		} elseif (($o1ln === $o2ln) && (($o1em !== "") && ($o2em !== ""))) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o1em . "\">" . $o1fn  ."</a> &amp; " . "<a href=\"mailto:" . $o2em . "\">" . $o2fn . "</a> " . $o1ln . " &nbsp;&nbsp;[ <a href=\"mailto:" . $o1em . "; " . $o2em . "\">" . "email both</a> ] </p>";

		// only 1 owner (owner1)
		} elseif (($o1em !== "") && ($o2em === "")) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o1em . "\">" . $o1fn  . " " . $o1ln . "</a></p>";

		// only 1 owner but for some reason they submitted that owner as "owner2"
		} elseif (($o1em === "") && ($o2em !== "")) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o2em . "\">" . $o2fn  . " " . $o2ln . "</a></p>";

		} else {
			echo "You're trying to break this, I can tell.<br />";
		}