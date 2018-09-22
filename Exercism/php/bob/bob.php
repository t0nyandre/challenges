<?php
class Bob {
    public function respondTo($input)
    {
        $this->input = trim($input, " \t\n\r\0\x0B\u{000b}\u{00a0}\u{2002}");
        if (empty($this->input)) {
            return "Fine. Be that way!";
        } elseif (ctype_upper($this->cleanString($this->input)) && substr($this->input, -1) === "?") {
            return "Calm down, I know what I'm doing!";
        } elseif (ctype_upper($this->cleanString($this->input))) {
            return "Whoa, chill out!";
        } elseif (substr($this->input, -1) === "?") {
            return "Sure.";
        } else {
            return "Whatever.";
        }
    }

    public function cleanString($string)
    {
        $this->string = iconv('utf-8', 'ascii//TRANSLIT', $string);
        return preg_replace("/[^a-zA-Z]+/", "", $this->string);
    }
}
