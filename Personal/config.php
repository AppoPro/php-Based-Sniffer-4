<?
if (!defined("FILE")) die("������ �������.");

$data_filename = "data.txt";       // ��� ����� � ������� ��������
$image_filename = "i.gif";         // ��� ����� � ��������
$style_filename = "style.css";     // ��� ����� �� ������

$max_entries = 0;           // ����� �������. ������� 0 ��� ������ ������
$entries_on_page = 0;       // ���-�� ������� �� ����� �������� (��� ���� �������������)
                            // ������� 0, ����� ��������� ������������ �����
$pages_pos = "updown";      // ��� ����������� ������ ������� (��� ���������� ����. �����)
                            // ��������� ��������: "up" - ������, "down" - �����, "updown" - ������ � �����
$info_line = true;          // ���������� ������ ���������� � ����� �������� (�����, IP, ������ "��������")

$auth_enabled = false;      // ��������� �����������
$user = "";                 // ����� ��� �����
$password = "";             // ������ ��� �����
?>