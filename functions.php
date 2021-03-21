<?php

function kelulusan($nilai)
{
      if ($nilai > 55) {
            return 'LULUS';
      } else {
            return ' TIDAK LULUS';
      }
}

function grade($nilai)
{
      if ($nilai >= 0 && $nilai <= 35) {
            return 'E';
      } elseif ($nilai > 35 && $nilai <= 55) {
            return 'D';
      } elseif ($nilai > 55 && $nilai <= 69) {
            return 'C';
      } elseif ($nilai > 69 && $nilai <= 84) {
            return 'B';
      } elseif ($nilai > 84 && $nilai <= 100) {
            return 'A';
      } elseif ($nilai < 0 || $nilai > 100) {
            return 'I';
      } else {
            return false;
      }
}

function predikat($grade)
{
      switch ($grade) {
            case 'E':
                  return 'Sangat kurang';
                  break;
            case 'D':
                  return 'Kurang';
                  break;
            case 'C':
                  return 'Cukup';
                  break;
            case 'B':
                  return 'Memuaskan';
                  break;
            case 'A':
                  return 'Sangat memuaskan';
                  break;
            case 'I':
                  return 'Tidak ada';
                  break;

            default:
                  return 'ngaco';
      }
}
