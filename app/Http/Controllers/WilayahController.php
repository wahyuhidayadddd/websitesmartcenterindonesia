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

        $currentItems = $data;

        $slugs = array_filter([
            $provinsi,
            $kabupaten,
            $kecamatan,
            $kelurahan
        ]);

        $last = null;

        foreach ($slugs as $slug) {

            $found = null;

            foreach ($currentItems as $item) {

                if (($item['slug'] ?? null) === $slug) {

                    $found = $item;
                    break;
                }
            }

            if (!$found) {
                abort(404);
            }

            $last = $found;

            $currentItems = $found['children'] ?? [];
        }

        return view('cabang.wilayah', [
            'title' => $last['nama'] ?? 'Indonesia',
            'current' => $last,
            'items' => $currentItems
        ]);
    }
}