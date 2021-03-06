<?php namespace Anomaly\PostsModule\Type\Contract;

/**
 * Interface TypeInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\PostsModule\Type\Contract
 */
use Anomaly\PostsModule\Post\PostCollection;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Stream\Contract\StreamInterface;

/**
 * Interface TypeInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\PostsModule\Type\Contract
 */
interface TypeInterface extends EntryInterface
{

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName();

    /**
     * Get the slug.
     *
     * @return string
     */
    public function getSlug();

    /**
     * Get the description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Get the related stream.
     *
     * @return StreamInterface
     */
    public function getEntryStream();

    /**
     * Get the related stream's
     * entry model name.
     *
     * @return string
     */
    public function getEntryModelName();

    /**
     * Get the CSS path.
     *
     * @return string
     */
    public function getCssPath();

    /**
     * Get the JS path.
     *
     * @return string
     */
    public function getJsPath();

    /**
     * Get related posts.
     *
     * @return PostCollection
     */
    public function getPosts();

    /**
     * Return the posts relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts();
}
