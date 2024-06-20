<?php
//hapus session
session_start();
session_destroy();
//pindah ke halaman login
header('Location: index.html') ;