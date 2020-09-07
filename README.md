# byr_torrent
byr_torrent is a plugin for tt-rss.

to solve the ip block problem(byr blocked all IPv6 address from public ISP of CHN).
you can download torrents from your own site.

### How to use

put directory `byr_torrent` into plugins.local/

edit file `config.php`, modify `PLUGINS` by adding `byr_torrent`, like

```
define('PLUGINS', 'auth_internal, note, fever, byr_pretty, byr_torrent');
```
