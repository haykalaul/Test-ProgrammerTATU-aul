<?php

namespace App\Services;

class PerformanceService
{
    /**
     * Hitung predikat kinerja.
     *
     * @param string $hasilKerja  'diatas ekspektasi' | 'sesuai ekspektasi' | 'dibawah ekspektasi'
     * @param string $perilaku    idem
     * @return string             'Sangat Baik' | 'Baik' | 'Cukup' | 'Kurang'
     */
    public function predikat_kinerja(string $hasilKerja, string $perilaku): string
    {
        $hasilKerja = strtolower(trim($hasilKerja));
        $perilaku   = strtolower(trim($perilaku));

        $allowed = config('penilaian.ekspektasi');   // dari langkah sebelumnya
        if (!in_array($hasilKerja, $allowed) || !in_array($perilaku, $allowed)) {
            throw new \InvalidArgumentException('Nilai ekspektasi tidak valid');
        }

        if ($hasilKerja === 'diatas ekspektasi' && $perilaku === 'diatas ekspektasi') {
            return 'Sangat Baik';
        }

        if ($hasilKerja === 'dibawah ekspektasi' && $perilaku === 'dibawah ekspektasi') {
            return 'Kurang';
        }

        if ($hasilKerja === 'dibawah ekspektasi' || $perilaku === 'dibawah ekspektasi') {
            return 'Cukup';
        }

        return 'Baik';
    }
}