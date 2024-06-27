<?php // phpcs:ignore
/**
 * Autoload_static.php @generated by Composer
 *
 * @package orchid_store
 */

namespace Composer\Autoload;

/**
 * Class ComposerStaticInit159c46f53090bd7ae29e8a5ae0898f50.
 *
 * @package orchid_store
 */
class ComposerStaticInit159c46f53090bd7ae29e8a5ae0898f50 {

	public static $prefixLengthsPsr4 = array( // phpcs:ignore
		'W' =>
		array(
			'WPTRT\\AdminNotices\\' => 19,
		),
	);

	public static $prefixDirsPsr4 = array( // phpcs:ignore
		'WPTRT\\AdminNotices\\' =>
		array(
			0 => __DIR__ . '/..' . '/wptrt/admin-notices/src', // phpcs:ignore
		),
	);

	public static function getInitializer( ClassLoader $loader ) { // phpcs:ignore
		return \Closure::bind(
			function () use ( $loader ) {
				$loader->prefixLengthsPsr4 = ComposerStaticInit159c46f53090bd7ae29e8a5ae0898f50::$prefixLengthsPsr4; // phpcs:ignore
				$loader->prefixDirsPsr4    = ComposerStaticInit159c46f53090bd7ae29e8a5ae0898f50::$prefixDirsPsr4; // phpcs:ignore
			},
			null,
			ClassLoader::class
		);
	}
}
