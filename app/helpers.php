<?php

function ok($message = "") {
	return [
		"status" => "OK",
		"message" => $message
	];
}
