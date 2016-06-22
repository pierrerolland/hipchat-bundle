# hipchat-bundle

Integration of Hipchat in Symfony applications. This bundle allow you to send notifications to your Hipchat rooms, defined in the configuration.

## Installation
`composer require pierrerolland/hipchat-bundle`

And in your app/AppKernel.php
```php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new Guzzle\ConfigOperationsBundle\GuzzleConfigOperationsBundle(),
            new Atlassian\HipchatBundle\AtlassianHipchatBundle(),
        ];

        return $bundles;
    }
```

## Usage

### 1. Get your room's token

In browser's Hipchat version, go to "Integrations", then "Build your own". Select a room and a name for your integration. You'll now have a room id and an auth token.

### 2. Configure the room in Symfony

```yaml
# config.yml

atlassian_hipchat:
      group: "plop" # Your group's name (plop.hipchat.com)
      rooms:
          foo:
              id: 42 # The room "foo"'s id
              token: blahblahblah # The room "foo"'s auth token
          ...    
```

### 3. Send your notifications

```php
   $this
      ->get('atlassian_hipchat.manager.hipchat')
      ->createNotification('foo', 'Will Grigg\'s on fire !', 'purple');
```

That's it !
