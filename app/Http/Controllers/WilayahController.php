<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function index(
        $provinsi = null,
        $kabupaten = null,
        $kecamatan = null,
        $kelurahan = null
    ) {

        $data = include resource_path('data/indonesia.php');

        $current = $data;

        $slugs = array_filter([
            $provinsi,
            $kabupaten,
            $kecamatan,
            $kelurahan
        ]);

        $last = null;

        foreach ($slugs as $slug) {

            $found = null;

            foreach ($current as $item) {

                if (($item['slug'] ?? null) == $slug) {

                    $found = $item;
                    break;
                }
            }

            if (!$found) {
                abort(404);
            }

            $current = $found['children'] ?? [];
            $last = $found;
        }

        return view('cabang.wilayah', [
            'title' => $last['nama'] ?? 'Indonesia',
            'items' => $current
        ]);
    }
}