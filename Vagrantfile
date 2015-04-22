Vagrant.configure(2) do |config|

    config.vm.box = "chef/centos-6.5-i386"

    config.vm.box_check_update = false

    config.vm.network "private_network", ip: "192.168.56.66"
    config.vm.synced_folder "./", "/www/www.ecommerce.local.com"
    config.vm.provider "virtualbox" do |vb|
        # Display the VirtualBox GUI when booting the machine
        vb.gui = false
        # Customize the amount of memory on the VM:
        vb.memory = "256"
    end
    config.vm.provision :shell do |shell|
        shell.path = "vagrant/setup.sh"
    end
    config.vm.provision "puppet" do |puppet|
        puppet.manifests_path = "puppet"
        puppet.manifest_file = "default.pp"
    end
end
