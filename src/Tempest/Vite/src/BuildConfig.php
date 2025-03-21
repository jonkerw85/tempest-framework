<?php

declare(strict_types=1);

namespace Tempest\Vite;

final class BuildConfig
{
    /**
     * Defines the configuration for a build. All paths are relative to the `public` directory.
     *
     * @param string $buildDirectory Name of the directory in which assets will be created by Vite.
     * @param string $bridgeFileName Name of the bridge file that the development server creates for Tempest to read.
     * @param string $manifest Name of the build manifest file generated by Vite for Tempest to read.
     * @param string[] $entrypoints Paths to the entrypoints, relative to the root of the project.
     */
    public function __construct(
        public string $buildDirectory = 'build',
        public string $bridgeFileName = 'vite-tempest',
        public string $manifest = 'manifest.json',
        public array $entrypoints = [],
    ) {
    }
}
